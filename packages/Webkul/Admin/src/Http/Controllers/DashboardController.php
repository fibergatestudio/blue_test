<?php

namespace Webkul\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Webkul\Sales\Repositories\OrderRepository as Order;
use Webkul\Sales\Repositories\OrderItemRepository as OrderItem;
use Webkul\Customer\Repositories\CustomerRepository as Customer;
use Webkul\Product\Repositories\ProductInventoryRepository as ProductInventory;

use App\LoyalityProgram;
use Redirect;

/**
 * Dashboard controller
 *
 * @author    Jitendra Singh <jitendra@webkul.com>
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $_config;

    /**
     * OrderRepository object
     *
     * @var array
     */
    protected $order;

    /**
     * OrderItemRepository object
     *
     * @var array
     */
    protected $orderItem;

    /**
     * CustomerRepository object
     *
     * @var array
     */
    protected $customer;

    /**
     * ProductInventoryRepository object
     *
     * @var array
     */
    protected $productInventory;

    /**
     * string object
     *
     * @var array
     */
    protected $startDate;

    /**
     * string object
     *
     * @var array
     */
    protected $lastStartDate;

    /**
     * string object
     *
     * @var array
     */
    protected $endDate;

    /**
     * string object
     *
     * @var array
     */
    protected $lastEndDate;

    /**
     * Create a new controller instance.
     *
     * @param  \Webkul\Sales\Repositories\OrderRepository              $order
     * @param  \Webkul\Sales\Repositories\OrderItemRepository          $orderItem
     * @param  \Webkul\Customer\Repositories\CustomerRepository        $customer
     * @param  \Webkul\Product\Repositories\ProductInventoryRepository $productInventory
     * @return void
     */
    public function __construct(
        Order $order,
        OrderItem $orderItem,
        Customer $customer,
        ProductInventory $productInventory
    )
    {
        $this->_config = request('_config');

        $this->middleware('admin');

        $this->order = $order;

        $this->orderItem = $orderItem;

        $this->customer = $customer;

        $this->productInventory = $productInventory;
    }

    public function getPercentageChange($previous, $current)
    {
        if (! $previous)
            return $current ? 100 : 0;

        return ($current - $previous) / $previous * 100;
    }

    // public function loyality()
    // {
    //     return view($this->_config['view']);
    // }
    public function clients()
    {
        return view($this->_config['view']);
    }
    public function tasks(){
        return view($this->_config['view']);
    }
    public function form(){

        $contact_form = DB::table('contact_form')->get();

        return view($this->_config['view'],[
            'contact_form' => $contact_form,
        ]);
    }
    // LOYALITY 
    public function loyalty()
    {
        // Total Customers Points
        $total_customers_points = DB::table('customers')->sum('points');
        // Total Customers Used Points
        $total_customers_used_points = DB::table('customers')->sum('used_points');
        //Loyality Settings
        $loyality_settings = DB::table('loyality_program')->first();

        if(!$loyality_settings){
            $new_settings = new LoyalityProgram();
            $new_settings->payout_percentage = '5';
            $new_settings->points_value = '1';
            $new_settings->save();
            $loyality_settings = DB::table('loyality_program')->first();
        } else {
            // $test="Has Value";
            // dd($test);
        }

        // Points Value
        $points_value = $loyality_settings->points_value;
        // Pyaout Percentage
        $payout_percentage = $loyality_settings->payout_percentage;

        return view($this->_config['view'],
        [
            'total_customers_points' => $total_customers_points,
            'total_customers_used_points' => $total_customers_used_points,
            'points_value' => $points_value,
            'payout_percentage' => $payout_percentage,
        ]);
    }
    public function apply_percentage(Request $request){

        $table_check = DB::table('loyality_program')->first();

        if($table_check){

            DB::table('loyality_program')
                ->limit(1)
                ->update(['payout_percentage' => $request->payout_percentage]);

        } else {

            $loyal_settings = new LoyalityProgram();
            $loyal_settings->payout_percentage = $request->payout_percentage;
            $loyal_settings->save();
            
        }

        return back();
    }
    public function apply_points_value(Request $request){

        $table_check = DB::table('loyality_program')->first();

        if($table_check){

            DB::table('loyality_program')
                ->limit(1)
                ->update(['points_value' => $request->points_value]);

        } else {

            $loyal_settings = new LoyalityProgram();
            $loyal_settings->points_value = $request->points_value;
            $loyal_settings->save();
            
        }


        return back();
    }

    public function voucher()
    {
        return view($this->_config['view']);
    }
    public function pages()
    {

        $pages = DB::table('pages')->get();

        return view($this->_config['view'],[
            'pages' => $pages,
        ]);
    }
        public function createPage(){

            return view($this->_config['view']);
        }

        public function editPage($page_id){

            $page = DB::table('pages')->where('id', $page_id)->first();

            return view($this->_config['view'],[
                'page_id' => $page_id,
                'page' => $page,
            ]);
        }

        public function editPageApply(Request $request){

            $page_id = $request->page_id;

            //dd($page_id);

            $page_slug = $request->page_slug;
            $page_title = $request->page_title;
            $page_body = $request->page_body;
            $meta_title = $request->meta_title;
            $meta_descr = $request->meta_descr;
            $meta_keys = $request->meta_keys;
    
            //dd($page_slug,$meta_keys);

            //$test = DB::table('pages')->where('slug', $page_id)->limit(1);

            // dd($page_id);
            // DB::table('pages')->where('id', '1')->update([ 'title' => 'KAPPA']);

    
            DB::table('pages')->where('id', '=', $page_id)
            ->limit(1)
            ->update([
                'slug' => $page_slug,
                'title' => $page_title,
                'body' => $page_body,
                'meta_title' => $meta_title,
                'meta_descr' => $meta_descr,
                'meta_keys' => $meta_keys
            ]);

            // DB::table('loyality_program')
            //     ->limit(1)
            //     ->update(['payout_percentage' => $request->payout_percentage]);


            return Redirect::to('/admin/pages');
        }

        public function deletePage($page_id){

            //dd($page_id);

            // $deletePage = DB::table('pages')->where('id', $page_id)->first();
            // $deletePage->delete();

            DB::table('pages')->where('id', $page_id)->delete();

            return back();
        }

    public function bluebox()
    {
        return view($this->_config['view']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->setStartEndDate();

        $statistics = [
            'total_customers' => [
                'previous' => $previous = $this->getCustomersBetweenDates($this->lastStartDate, $this->lastEndDate)->count(),
                'current' => $current = $this->getCustomersBetweenDates($this->startDate, $this->endDate)->count(),
                'progress' => $this->getPercentageChange($previous, $current)
            ],
            'total_orders' =>  [
                'previous' => $previous = $this->previousOrders()->count(),
                'current' => $current = $this->currentOrders()->count(),
                'progress' => $this->getPercentageChange($previous, $current)
            ],
            'total_sales' =>  [
                'previous' => $previous = $this->previousOrders()->sum('sub_total'),
                'current' => $current = $this->currentOrders()->sum('sub_total'),
                'progress' => $this->getPercentageChange($previous, $current)
            ],
            'avg_sales' =>  [
                'previous' => $previous = $this->previousOrders()->avg('sub_total'),
                'current' => $current = $this->currentOrders()->avg('sub_total'),
                'progress' => $this->getPercentageChange($previous, $current)
            ],
            'avg_points' => [
                'previous' => $previous = $this->previousPoints()->avg('points'),
                'current' => $current = $this->currentPoints()->avg('points'),
                'progress' => $this->getPercentageChange($previous, $current)
            ],
            'top_selling_categories' => $this->getTopSellingCategories(),
            'top_selling_products' => $this->getTopSellingProducts(),
            'customer_with_most_sales' => $this->getCustomerWithMostSales(),
            'stock_threshold' => $this->getStockThreshold(),
        ];

        foreach (core()->getTimeInterval($this->startDate, $this->endDate) as $interval) {
            $statistics['sale_graph']['label'][] = $interval['start']->format('d M');

            $total = $this->getOrdersBetweenDate($interval['start'], $interval['end'])->sum('base_grand_total');

            $statistics['sale_graph']['total'][] = $total;
            $statistics['sale_graph']['formated_total'][] = core()->formatBasePrice($total);
        }

        // here
        // Total Customers Points
        $total_customers_points = DB::table('customers')->sum('points');
        // Total Customers Used Points
        $total_customers_used_points = DB::table('customers')->sum('used_points');

        return view($this->_config['view'], compact('statistics'))->with(
            [
            'startDate' => $this->startDate, 
            'endDate' => $this->endDate,
            'total_customers_points' => $total_customers_points,
            'total_customers_used_points' => $total_customers_used_points,
            ]);
    }

    /**
     * Returns the list of top selling categories
     *
     * @return mixed
     */
    public function getTopSellingCategories()
    {
        return $this->orderItem->getModel()
            ->leftJoin('products', 'order_items.product_id', 'products.id')
            ->leftJoin('product_categories', 'products.id', 'product_categories.product_id')
            ->leftJoin('categories', 'product_categories.category_id', 'categories.id')
            ->leftJoin('category_translations', 'categories.id', 'category_translations.category_id')
            ->where('category_translations.locale', app()->getLocale())
            ->where('order_items.created_at', '>=', $this->startDate)
            ->where('order_items.created_at', '<=', $this->endDate)
            ->where('order_items.qty_ordered', '>', 0)
            ->addSelect(DB::raw('SUM(qty_ordered) as total_qty_ordered'))
            ->addSelect(DB::raw('COUNT(products.id) as total_products'))
            ->addSelect('order_items.id', 'categories.id as category_id', 'category_translations.name')
            ->groupBy('categories.id')
            ->orderBy('total_qty_ordered', 'DESC')
            ->limit(5)
            ->get();
    }

    /**
     * Return stock threshold.
     *
     * @return mixed
     */
    public function getStockThreshold()
    {
        return $this->productInventory->getModel()
            ->leftJoin('products', 'product_inventories.product_id', 'products.id')
            ->select(DB::raw('SUM(qty) as total_qty'))
            ->addSelect('product_inventories.product_id')
            ->where('products.type', '!=', 'configurable')
            ->groupBy('product_id')
            ->orderBy('total_qty', 'ASC')
            ->limit(5)
            ->get();
    }

    /**
     * Returns top selling products
     * @return mixed
     */
    public function getTopSellingProducts()
    {
        return $this->orderItem->getModel()
            ->select(DB::raw('SUM(qty_ordered) as total_qty_ordered'))
            ->addSelect('id', 'product_id', 'product_type', 'name')
            ->where('order_items.created_at', '>=', $this->startDate)
            ->where('order_items.created_at', '<=', $this->endDate)
            ->whereNull('parent_id')
            ->groupBy('product_id')
            ->orderBy('total_qty_ordered', 'DESC')
            ->limit(5)
            ->get();
    }

    /**
     * Returns top selling products
     *
     * @return mixed
     */
    public function getCustomerWithMostSales()
    {
        return $this->order->getModel()
            ->select(DB::raw('SUM(base_grand_total) as total_base_grand_total'))
            ->addSelect(DB::raw('COUNT(id) as total_orders'))
            ->addSelect('id', 'customer_id', 'customer_email', 'customer_first_name', 'customer_last_name')
            ->where('orders.created_at', '>=', $this->startDate)
            ->where('orders.created_at', '<=', $this->endDate)
            ->groupBy('customer_email')
            ->orderBy('total_base_grand_total', 'DESC')
            ->limit(5)
            ->get();
    }

    /**
     * Sets start and end date
     *
     * @return void
     */
    public function setStartEndDate()
    {
        $this->startDate = request()->get('start')
            ? Carbon::createFromTimeString(request()->get('start') . " 00:00:01")
            : Carbon::createFromTimeString(Carbon::now()->subDays(30)->format('Y-m-d') . " 00:00:01");

        $this->endDate = request()->get('end')
            ? Carbon::createFromTimeString(request()->get('end') . " 23:59:59")
            : Carbon::now();

        if ($this->endDate > Carbon::now())
            $this->endDate = Carbon::now();

        $this->lastStartDate = clone $this->startDate;
        $this->lastEndDate = clone $this->startDate;

        $this->lastStartDate->subDays($this->startDate->diffInDays($this->endDate));
        // $this->lastEndDate->subDays($this->lastStartDate->diffInDays($this->lastEndDate));
    }

    private function previousOrders()
    {
        return $this->getOrdersBetweenDate($this->lastStartDate, $this->lastEndDate);
    }

    private function currentOrders()
    {
        return $this->getOrdersBetweenDate($this->startDate, $this->endDate);
    }

    private function getOrdersBetweenDate($start, $end)
    {
        return $this->order->scopeQuery(function ($query) use ($start, $end) {
            return $query->where('orders.created_at', '>=', $start)->where('orders.created_at', '<=', $end);
        });
    }

    private function getCustomersBetweenDates($start, $end)
    {
        return $this->customer->scopeQuery(function ($query) use ($start, $end) {
            return $query->where('customers.created_at', '>=', $start)->where('customers.created_at', '<=', $end);
        });
    }

    private function previousPoints()
    {
        return $this->getPointsBetweenDate($this->lastStartDate, $this->lastEndDate);
    }

    private function currentPoints()
    {
        return $this->getPointsBetweenDate($this->startDate, $this->endDate);
    }

    private function getPointsBetweenDate($start, $end)
    {
        return $this->customer->scopeQuery(function ($query) use ($start, $end) {
            return $query->where('customers.created_at', '>=', $start)->where('customers.created_at', '<=', $end);
        });
    }
}