<?php

namespace Webkul\Shop\Http\Controllers;

use Webkul\Shop\Http\Controllers\Controller;
use Webkul\Checkout\Facades\Cart;
use Webkul\Shipping\Facades\Shipping;
use Webkul\Payment\Facades\Payment;
use Webkul\Checkout\Http\Requests\CustomerAddressForm;
use Webkul\Sales\Repositories\OrderRepository;
use Webkul\Customer\Repositories\CustomerRepository;
use Webkul\Discount\Helpers\CouponAbleRule as Coupon;
use Webkul\Discount\Helpers\NonCouponAbleRule as NonCoupon;
use Webkul\Discount\Helpers\ValidatesDiscount;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Auth;
use DB;
/**
 * Chekout controller for the customer and guest for placing order
 *
 * @author  Jitendra Singh <jitendra@webkul.com> @jitendra-webkul
 * @author  Prashant Singh <prashant.singh852@webkul.com> @prashant-webkul
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class OnepageController extends Controller
{
    /**
     * OrderRepository object
     *
     * @var array
     */
    protected $orderRepository;

    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    /**
     * CouponAbleRule instance object
     *
     */
    protected $coupon;

    /**
     * NoncouponAbleRule instance object
     *
     */
    protected $nonCoupon;

    /**
     * ValidatesDiscount instance object
     */
    protected $validatesDiscount;

    protected $customer;

    /**
     * Create a new controller instance.
     *
     * @param  \Webkul\Attribute\Repositories\OrderRepository  $orderRepository
     * @return void
     */
    public function __construct(
        OrderRepository $orderRepository,
        Coupon $coupon,
        NonCoupon $nonCoupon,
        ValidatesDiscount $validatesDiscount,
        CustomerRepository $customer
    )
    {
        $this->coupon = $coupon;

        $this->nonCoupon = $nonCoupon;

        $this->orderRepository = $orderRepository;

        $this->validatesDiscount = $validatesDiscount;

        $this->customer = $customer;

        $this->_config = request('_config');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        if (Cart::hasError())
            return redirect()->route('shop.checkout.cart.index');

        $this->nonCoupon->apply();

        Cart::collectTotals();

        return view($this->_config['view'])->with('cart', Cart::getCart());
    }

    /**
     * Return order short summary
     *
     * @return \Illuminate\Http\Response
    */
    public function summary()
    {
        $cart = Cart::getCart();

        $points = DB::table('loyality_program')->first();

        $customer = $this->customer->find(auth()->guard('customer')->user()->id);

        $exchange_rate = DB::table('currencies')->where('code', 'HUF')->first();
        $exch_id = $exchange_rate->id;

        //dd($exch_id);

        $convert_rate = DB::table('currency_exchange_rates')->where('target_currency', $exch_id)->first();


        return response()->json([
                'html' => view('shop::checkout.total.summary', compact('cart','points','customer','convert_rate'))->render()
            ]);
    }

    /**
     * Saves customer address.
     *
     * @param  \Webkul\Checkout\Http\Requests\CustomerAddressForm $request
     * @return \Illuminate\Http\Response
    */
    public function saveAddress(CustomerAddressForm $request)
    {
        $data = request()->all();

        $data['billing']['address1'] = implode(PHP_EOL, array_filter($data['billing']['address1']));
        $data['shipping']['address1'] = implode(PHP_EOL, array_filter($data['shipping']['address1']));

        if (Cart::hasError() || !Cart::saveCustomerAddress($data) || ! $rates = Shipping::collectRates())
            return response()->json(['redirect_url' => route('shop.checkout.cart.index')], 403);

        $this->nonCoupon->apply();

        Cart::collectTotals();

        return response()->json($rates);
    }

    /**
     * Saves shipping method.
     *
     * @return \Illuminate\Http\Response
    */
    public function saveShipping()
    {
        $shippingMethod = request()->get('shipping_method');

        if (Cart::hasError() || !$shippingMethod || !Cart::saveShippingMethod($shippingMethod))
            return response()->json(['redirect_url' => route('shop.checkout.cart.index')], 403);

        $this->nonCoupon->apply();

        Cart::collectTotals();

        return response()->json(Payment::getSupportedPaymentMethods());
    }

    /**
     * Saves payment method.
     *
     * @return \Illuminate\Http\Response
    */
    public function savePayment()
    {
        $payment = request()->get('payment');

        if (Cart::hasError() || !$payment || !Cart::savePaymentMethod($payment))
            return response()->json(['redirect_url' => route('shop.checkout.cart.index')], 403);

        $this->nonCoupon->apply();

        $this->nonCoupon->checkOnShipping(Cart::getCart());

        Cart::collectTotals();

        $cart = Cart::getCart();

        return response()->json([
            'jump_to_section' => 'review',
            'html' => view('shop::checkout.onepage.review', compact('cart'))->render()
        ]);
    }

    /**
     * Saves order.
     *
     * @return \Illuminate\Http\Response
    */
    public function saveOrder()
    {
        if (Cart::hasError())
            return response()->json(['redirect_url' => route('shop.checkout.cart.index')], 403);

        Cart::collectTotals();

        $this->validateOrder();

        $cart = Cart::getCart();


        $points_to_remove = $cart->points;

        if($points_to_remove > '0'){

            $cust = DB::table('customers')->where('id', $cart['customer_id'])->first();
            $current_points = $cust->points;
    
            $new_points = $current_points - $points_to_remove;
    
            DB::table('customers')
            ->where('id', $cart['customer_id'])
            ->limit(1)
            ->update(['points' => $new_points ]);
    
    
            if ($redirectUrl = Payment::getRedirectUrl($cart)) {
                return response()->json([
                    'success' => true,
                    'redirect_url' => $redirectUrl
                ]);
            }

        } else {
            //Get Current PayoutPercentage

            $points_to_user = DB::table('customers')->where('id', $cart['customer_id'])->first();

            $loyality_settings = DB::table('loyality_program')->first();
            $percentage = $loyality_settings->payout_percentage;

            $points = $points_to_user->points;
            $points_to_add = ($orderItem->price) * ($percentage / 100);
            $converted_points = floor($points_to_add);
            $item_price = $points + $converted_points; 

            DB::table('customers')
            ->where('id', $data['customer_id'])
            ->limit(1)
            ->update(['points' => $item_price ]);
        }

        $order = $this->orderRepository->create(Cart::prepareDataForOrder());

        Cart::deActivateCart();

        session()->flash('order', $order);

        return response()->json([
            'success' => true,
        ]);
    }

    /**
     * Order success page
     *
     * @return \Illuminate\Http\Response
    */
    public function success()
    {
        if (! $order = session('order'))
            return redirect()->route('shop.checkout.cart.index');

        return view($this->_config['view'], compact('order'));
    }

    /**
     * Validate order before creation
     *
     * @return mixed
     */
    public function validateOrder()
    {
        $cart = Cart::getCart();

        $this->validatesDiscount->validate($cart);

        if (! $cart->shipping_address) {
            throw new \Exception(trans('Please check shipping address.'));
        }

        if (! $cart->billing_address) {
            throw new \Exception(trans('Please check billing address.'));
        }

        if (! $cart->selected_shipping_rate) {
            throw new \Exception(trans('Please specify shipping method.'));
        }

        if (! $cart->payment) {
            throw new \Exception(trans('Please specify payment method.'));
        }
    }

    /**
     * To apply couponable rule requested
     *
     * @return JSON
     */
    public function applyCoupon()
    {
        $this->validate(request(), [
            'code' => 'string|required'
        ]);

        $code = request()->input('code');

        $result = $this->coupon->apply($code);

        if ($result) {
            Cart::collectTotals();

            return response()->json([
                'success' => true,
                'message' => trans('shop::app.checkout.total.coupon-applied'),
                'result' => $result
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => trans('shop::app.checkout.total.cannot-apply-coupon'),
                'result' => null
            ], 422);
        }

        return $result;
    }
    

    /**
     * Initiates the removal of couponable cart rule
     *
     * @return Void
     */
    public function removeCoupon()
    {
        $result = $this->coupon->remove();

        if ($result) {
            Cart::collectTotals();

            return response()->json([
                    'success' => true,
                    'message' => trans('admin::app.promotion.status.coupon-removed'),
                    'data' => [
                        'grand_total' => core()->currency(Cart::getCart()->grand_total)
                    ]
                ], 200);
        } else {
            return response()->json([
                    'success' => false,
                    'message' => trans('admin::app.promotion.status.coupon-remove-failed'),
                    'data' => null
                ], 422);
        }
    }
}