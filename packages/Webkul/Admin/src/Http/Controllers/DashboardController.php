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
use App\CoffeeCapsules;
use App\FlavoredCoffee;
use App\CoffeeBeans;
use App\TurkishCoffeeSettings;
use App\Trainings;
use App\TrainingsEdit;
use App\FaqQuestion;
use App\HomepageProd;
use App\FaqCategories;
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

        $task_table = DB::table('tasks')->get();
        $trai = DB::table('trainings')->get();

        //dd($trai);
        if(!is_null($trai)){
            $trainings = DB::table('trainings')->get();
            //dd($trainings);
        } else {
            
            $default_trainings = new Trainings();
            $default_trainings->training_name = 'Barista/Latte art basics';
            $default_trainings->save();

            $default_trainings = new Trainings();
            $default_trainings->training_name = 'Home Barista';
            $default_trainings->save();

            $default_trainings = new Trainings();
            $default_trainings->training_name = 'Cafe open';
            $default_trainings->save();

            $default_trainings = new Trainings();
            $default_trainings->training_name = 'Roasting';
            $default_trainings->save();

            $trainings = DB::table('trainings')->get();

            //dd($trainings);
        }

        return view($this->_config['view'],[
            'task_table' => $task_table,
            'trainings' => $trainings,
            'trai' => $trai,
        ]);
    }
    public function add_training(Request $request){
        
        //dd($request->training_name);

        $new_training = new Trainings();
        $new_training->training_name = $request->training_name;
        $new_training->training_price = $request->training_price;
        $new_training->save();

        //dd($new_training);

        return back();
    }
    public function form(){

        $contact_form = DB::table('contact_form')->get();

        return view($this->_config['view'],[
            'contact_form' => $contact_form,
        ]);
    }
    public function capsules(){

        $capsules = DB::table('coffee_capsules')->get();
        $products = DB::table('product_flat')->whereNotNull('name')->groupBy('url_key')->get();

        return view($this->_config['view'],[
            'capsules' => $capsules,
            'products' => $products
        ]);
    }
        public function capsules_add_prod($prod_id){

            //dd($prod_id);

            $capsule_prod = new CoffeeCapsules();
            $capsule_prod->prod_id = $prod_id;
            $capsule_prod->save();

            return back();

        }
        public function capsules_remove_prod($row_id){

            //dd($prod_id);

            //$remove_capsule = 
            DB::table('coffee_capsules')->where('id', $row_id)->delete();

            return back();
        }

    public function turkish(){

        //$contact_form = DB::table('contact_form')->get();
        $turkish_settings = DB::table('turkish_coffee_settings')->get();
        $cezve = DB::table('turkish_coffee_settings')->where('link_place', 'Cezve')->first();
        $cezve_link = $cezve->link;
        $coffee = DB::table('turkish_coffee_settings')->where('link_place', 'Coffee')->first();
        $coffee_link = $coffee->link;

        return view($this->_config['view'],[
            'cezve_link' => $cezve_link,
            'coffee_link' => $coffee_link,
        ]);
    }

        public function turk_apply_settings(Request $request){

            $cezve = $request->cezve;
            $cezve_link = DB::table('turkish_coffee_settings')->where('link_place', 'Cezve')->first();
            if($cezve_link){

                DB::table('turkish_coffee_settings')
                ->where('link_place', 'Cezve')
                ->limit(1)
                ->update([
                    'link' => $cezve,
                    ]);
            } else {
                $new_cez = new TurkishCoffeeSettings();
                $new_cez->link_place = 'Cezve';
                $new_cez->link = $cezve;
                $new_cez->save();
            }

            $coffee = $request->coffee;
            $coffee_link = DB::table('turkish_coffee_settings')->where('link_place', 'Coffee')->first();
            if($cezve_link){

                DB::table('turkish_coffee_settings')
                ->where('link_place', 'Coffee')
                ->limit(1)
                ->update([
                    'link' => $coffee,
                    ]);
            } else {
                $new_cof = new TurkishCoffeeSettings();
                $new_cof->link_place = 'Coffee';
                $new_cof->link = $coffee;
                $new_cof->save();
            }

            //dd($coffee, $cezve);


            return back();
        }

    public function beans(){

        //$contact_form = DB::table('contact_form')->get();
        $beans_class = DB::table('coffee_beans')->where('products_block', 'Something Classic')->get();
        $beans_special = DB::table('coffee_beans')->where('products_block', 'Something Specialty')->get();
        $products = DB::table('product_flat')->whereNotNull('name')->groupBy('url_key')->get();

        return view($this->_config['view'],[
            'beans_class' => $beans_class,
            'beans_special' => $beans_special,
            'products' => $products,
        ]);
    }

        public function beans_add_prod_special($prod_id){

            $capsule_prod = new CoffeeBeans();
            $capsule_prod->prod_id = $prod_id;
            $capsule_prod->products_block = "Something Specialty";
            $capsule_prod->save();

            return back();
        }
        public function beans_add_prod_classic($prod_id){

            $capsule_prod = new CoffeeBeans();
            $capsule_prod->prod_id = $prod_id;
            $capsule_prod->products_block = "Something Classic";
            $capsule_prod->save();

            return back();
        }
        public function beans_remove_prod($row_id){

            DB::table('coffee_beans')->where('id', $row_id)->delete();
            
            return back();
        }
    public function flavored(){

        //$contact_form = DB::table('contact_form')->get();
        $flavored = DB::table('flavored_coffee')->get();
        $products = DB::table('product_flat')->whereNotNull('name')->groupBy('url_key')->get();

        return view($this->_config['view'],[
            'flavored' => $flavored,
            'products' => $products
        ]);
    }
        public function flavored_add_prod($prod_id){

            //dd($prod_id);

            $capsule_prod = new FlavoredCoffee();
            $capsule_prod->prod_id = $prod_id;
            $capsule_prod->save();

            return back();

        }
        public function flavored_remove_prod($row_id){

            //dd($prod_id);

            //$remove_capsule = 
            DB::table('flavored_coffee')->where('id', $row_id)->delete();

            return back();
        }
    public function homeprod(){

        $homeprod = DB::table('homepage_prod')->get();
        $products = DB::table('product_flat')->whereNotNull('name')->groupBy('url_key')->get();
        
        return view($this->_config['view'],[
            'homeprod' => $homeprod,
            'products' => $products
        ]);

    }
        public function homeprod_add($prod_id){

            $homepage_prod = new HomepageProd();
            $homepage_prod->prod_id = $prod_id;
            $homepage_prod->save();

            return back();
        }
        public function homeprod_remove($row_id){

            DB::table('homepage_prod')->where('id', $row_id)->delete();

            return back();
        }

    public function faq(){

        $faq_table = DB::table('faq_questions')->get();

        $faq_categories = DB::table('faq_categories')->get(['slug', 'category_name']);

        $cat_arr = [];
        foreach($faq_categories as $cat){

            $cat_arr[$cat->slug] = $cat->category_name;

        }


        return view($this->_config['view'],[
            'faq_categories' => $cat_arr,
            'faq_table' => $faq_table,
        ]);
    }
        public function faq_add(Request $request){

            $faq_question = new FaqQuestion();
            $faq_question->question = $request->question;
            $faq_question->answer = $request->answer;
            $faq_question->category = $request->category;
            $faq_question->save();
            $success = 'The question saved successfully !';
            return back();
            //return view('FAQShow',['faq_categories' => $this->faq_categories, 'success' => $success]);

        }
        public function faq_add_category(Request $request){

            //dd($request->all());

            $faq_cat = new FaqCategories();
            $faq_cat->category_name = $request->category_name;
            $faq_cat->slug = $request->slug;
            $faq_cat->save();

            return back();
        }

    public function trainings_edit(){

        $training_edit = DB::table('trainings_edit')->first();

        //dd($training_edit);

        if(!$training_edit){

            //dd("EMPTY");

            // $new_training = new TrainingsEdit();
            // $new_training->training_number = $request->training_number;
            // $new_training->training_name = $request->training_name;
            // $new_training->training_description = $request->training_description;
            // $new_training->training_cost = $request->training_cost;
            // $new_training->training_structure = $request->training_structure;
            // $new_training->save();

            $new_training = new TrainingsEdit();
            $new_training->training_number = "TRAINING 1";
            $new_training->training_name = "Barista training";
            $new_training->training_description = "Our company has many years of experience and we are happy to deliver it individually through our intensive training sessions. Our Barista Trainings we recommend for those who want to learn practical skills quickly.";
            $new_training->training_location = "Training can take place at our own base or if necessary, at the customer's place";
            $new_training->training_cost = "The Barista Training duration is 2 hours — Price: 20,000 HUF gross";
            $new_training->training_structure = "basics of coffee machine handling, setting of grinder, basic machine maintenance";
            $new_training->save();

            $new_training = new TrainingsEdit();
            $new_training->training_number = "TRAINING 2";
            $new_training->training_name = "Barista training";
            $new_training->training_description = "Our company has many years of experience and we are happy to deliver it individually through our intensive training sessions. Our Barista Trainings we recommend for those who want to learn practical skills quickly.";
            $new_training->training_location = "Training can take place at our own base or if necessary, at the customer's place";
            $new_training->training_cost = "The Barista Training duration is 2 hours — Price: 20,000 HUF gross";
            $new_training->training_structure = "basics of coffee machine handling, setting of grinder, basic machine maintenance";
            $new_training->save();

            $new_training = new TrainingsEdit();
            $new_training->training_number = "TRAINING 3";
            $new_training->training_name = "Barista training";
            $new_training->training_description = "Our company has many years of experience and we are happy to deliver it individually through our intensive training sessions. Our Barista Trainings we recommend for those who want to learn practical skills quickly.";
            $new_training->training_location = "Training can take place at our own base or if necessary, at the customer's place";
            $new_training->training_cost = "The Barista Training duration is 2 hours — Price: 20,000 HUF gross";
            $new_training->training_structure = "basics of coffee machine handling, setting of grinder, basic machine maintenance";
            $new_training->save();

            $new_training = new TrainingsEdit();
            $new_training->training_number = "TRAINING 4";
            $new_training->training_name = "Barista training";
            $new_training->training_description = "Our company has many years of experience and we are happy to deliver it individually through our intensive training sessions. Our Barista Trainings we recommend for those who want to learn practical skills quickly.";
            $new_training->training_location = "Training can take place at our own base or if necessary, at the customer's place";
            $new_training->training_cost = "The Barista Training duration is 2 hours — Price: 20,000 HUF gross";
            $new_training->training_structure = "basics of coffee machine handling, setting of grinder, basic machine maintenance";
            $new_training->save();

            $trainings_info_1 = DB::table('trainings_edit')->where('id','1')->first();
            $trainings_info_2 = DB::table('trainings_edit')->where('id','2')->first();
            $trainings_info_3 = DB::table('trainings_edit')->where('id','3')->first();
            $trainings_info_4 = DB::table('trainings_edit')->where('id','4')->first();

        } else {

            $trainings_info_1 = DB::table('trainings_edit')->where('id','1')->first();
            $trainings_info_2 = DB::table('trainings_edit')->where('id','2')->first();
            $trainings_info_3 = DB::table('trainings_edit')->where('id','3')->first();
            $trainings_info_4 = DB::table('trainings_edit')->where('id','4')->first();
            //dd("NOT_EMPTY");

        }

        return view($this->_config['view'],[
            'trainings_info_1' => $trainings_info_1,
            'trainings_info_2' => $trainings_info_2,
            'trainings_info_3' => $trainings_info_3,
            'trainings_info_4' => $trainings_info_4,
            ]);
    }

        public function trainings_edit_apply(Request $request){

            $training_id = $request->training_id;

            //dd($training_id);

            DB::table('trainings_edit')
            ->where('id', $training_id)
            ->limit(1)
            ->update([
                'training_number' => $request->training_number,
                'training_name' => $request->training_name,
                'training_description' => $request->training_description,
                'training_location' => $request->training_location,
                'training_cost' => $request->training_cost,
                'training_structure' => $request->training_structure,
                ]);

            return back();            
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