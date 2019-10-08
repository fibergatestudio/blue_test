<?php

namespace Webkul\Customer\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Webkul\Customer\Repositories\CustomerRepository;
use Webkul\Product\Repositories\ProductReviewRepository as ProductReview;
use Webkul\Customer\Models\Customer;
use App\CustomerAddresses;
use Auth;
use Hash;
use DB;
use Redirect;

/**
 * Customer controlller for the customer basically for the tasks of customers which will be done after customer authentication.
 *
 * @author    Prashant Singh <prashant.singh852@webkul.com>
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $_config;

    /**
     * CustomerRepository object
     *
     * @var array
    */
    protected $customer;

    /**
     * ProductReviewRepository object
     *
     * @var array
    */
    protected $productReview;

    /**
     * Create a new Repository instance.
     *
     * @param  \Webkul\Customer\Repositories\CustomerRepository     $customer
     * @param  \Webkul\Product\Repositories\ProductReviewRepository $productReview
     * @return void
    */
    public function __construct(
        CustomerRepository $customer,
        ProductReview $productReview
    )
    {
        $this->middleware('customer');

        $this->_config = request('_config');

        $this->customer = $customer;

        $this->productReview = $productReview;
    }

    /**
     * Taking the customer to profile details page
     *
     * @return View
     */
    public function index()
    {
        $customer = $this->customer->find(auth()->guard('customer')->user()->id);

        //dd($customer);

        $address = DB::table('customer_addresses')->where('customer_id', $customer->id)->first();

        return view($this->_config['view'],[ 'address' => $address ], compact('customer'));
    }

    /**
     * For loading the edit form page.
     *
     * @return View
     */
    public function edit()
    {
        $customer = $this->customer->find(auth()->guard('customer')->user()->id);

        return view($this->_config['view'], compact('customer'));
    }

    /**
     * Edit function for editing customer profile.
     *
     * @return Redirect.
     */
    public function update()
    {
        $id = auth()->guard('customer')->user()->id;

        $this->validate(request(), [
            'first_name' => 'string',
            'last_name' => 'string',
            'gender' => 'required',
            'date_of_birth' => 'date|before:today',
            'email' => 'email|unique:customers,email,'.$id,
            'oldpassword' => 'required_with:password',
            'password' => 'confirmed|min:6'
        ]);

        $data = collect(request()->input())->except('_token')->toArray();

        if ($data['date_of_birth'] == "") {
            unset($data['date_of_birth']);
        }

        if ($data['oldpassword'] != "" || $data['oldpassword'] != null) {
            if(Hash::check($data['oldpassword'], auth()->guard('customer')->user()->password)) {
                $data['password'] = bcrypt($data['password']);
            } else {
                session()->flash('warning', trans('shop::app.customer.account.profile.unmatch'));

                return redirect()->back();
            }
        } else {
            unset($data['password']);
        }

        if ($this->customer->update($data, $id)) {
            Session()->flash('success', trans('shop::app.customer.account.profile.edit-success'));

            return redirect()->route($this->_config['redirect']);
        } else {
            Session()->flash('success', trans('shop::app.customer.account.profile.edit-fail'));

            return redirect()->back($this->_config['redirect']);
        }
    }

    public function new_up(Request $request){


        //Customer
        $user_id = $request->user_id;

        $firstName = $request->firstName;
        $lastName = $request->lastName;
        $email = $request->email;
        $gender = $request->gender;

        $customer = DB::table('customers')->where('id', $user_id)->first();

        DB::table('customers')->where('id', $user_id)
        ->limit(1)
        ->update([
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $email,
            'gender' => $gender,
        ]);

        //Adress
        $streetAddress = $request->streetAddress;
        $city = $request->city;
        $region = $request->region;
        $zip = $request->zip;
        $phone = $request->phone;
        
        $address_checker = DB::table('customer_addresses')->where('customer_id', $user_id)->first();

        if($address_checker){

            DB::table('customer_addresses')->where('customer_id', $user_id)
            ->limit(1)
            ->update([
                'address1' => $streetAddress,
                'city' => $city,
                'state' => $region,
                'postcode' => $zip,
                'phone' => $phone,
            ]);

        } else {

            $new_address = new CustomerAddresses();
            $new_address->customer_id = $user_id;
            $new_address->address1 = $streetAddress;
            $new_address->city = $city;
            $new_address->state = $region;
            $new_address->postcode = $zip;
            $new_address->phone = $phone;
            $new_address->save();

        }


        //return back();
        return Redirect::back()->withErrors(['Information Changed!', 'The Message']);
    }

    /**
     * Load the view for the customer account panel, showing approved reviews.
     *
     * @return Mixed
     */
    public function reviews()
    {
        $reviews = auth()->guard('customer')->user()->all_reviews;

        return view($this->_config['view'], compact('reviews'));
    }
}
