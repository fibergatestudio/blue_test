<?php

namespace Webkul\Shop\Http\Controllers;

use Webkul\Shop\Http\Controllers\Controller;
use Webkul\Core\Repositories\SliderRepository;
use Webkul\Product\Repositories\ProductRepository as Product;
use DB;
use Redirect;

use Illuminate\Http\Request;

/**
 * Home page controller
 *
 * @author    Prashant Singh <prashant.singh852@webkul.com> @prashant-webkul
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
 class HomeController extends Controller
{
    protected $_config;
    protected $sliderRepository;
    protected $current_channel;
    protected $product;

    public function __construct(SliderRepository $sliderRepository, Product $product)
    {
        $this->_config = request('_config');

        $this->product = $product;

        $this->sliderRepository = $sliderRepository;
    }

    /**
     * loads the home page for the storefront
     */
    public function index(Request $request)
    {
        $filter = $request->atr;
        $locale = app()->getLocale();

        //$test = app()->getLocale();
        //dd($test);

        //dd($filter);

        $currentChannel = core()->getCurrentChannel();
        $sliderData = $this->sliderRepository->findByField('channel_id', $currentChannel->id)->toArray();
        $product = $this->product;

        if($filter){

            $all_prod = DB::table('product_flat')->whereIn('CoffeeWeight_label', $filter)->where('locale', $locale)->limit(20)->groupBy('parent_id')->get();

        } else {

            $all_prod = DB::table('product_flat')->whereNotNull('url_key')->where('locale', $locale)->limit(20)->get();

        }

        $prodcount = $all_prod->count();
        //dd($prodcount);

        
        $image = DB::table('product_images')->get();

        $categories = DB::table('category_translations')->where('locale', $locale)->get();

        return Redirect::to('/');

        return view($this->_config['view'], compact('sliderData'),[
            'product' => $product,
            'all_prod' => $all_prod,
            'image' => $image,
            'filter' => $filter,
            'prodcount' => $prodcount,
            'categories' => $categories,
        ]);
    }

    public function Contacts(){
        return view('Contacts');
    }

    public function ShowMore(Request $request)
    {
        $filter = $request->atr;
        $locale = app()->getLocale();

        //$test = app()->getLocale();
        //dd($test);

        //dd($filter);

        $currentChannel = core()->getCurrentChannel();
        $sliderData = $this->sliderRepository->findByField('channel_id', $currentChannel->id)->toArray();
        $product = $this->product;

        if($filter){

            $all_prod = DB::table('product_flat')->whereIn('CoffeeWeight_label', $filter)->where('locale', $locale)->groupBy('parent_id')->paginate(20);

        } else {

            $all_prod = DB::table('product_flat')->whereNotNull('url_key')->where('locale', $locale)->paginate(20);

        }

        $prodcount = $all_prod->count();
        //dd($prodcount);

        
        $image = DB::table('product_images')->get();

        $categories = DB::table('category_translations')->where('locale', $locale)->get();

        return view($this->_config['view'], compact('sliderData'),[
            'product' => $product,
            'all_prod' => $all_prod,
            'image' => $image,
            'filter' => $filter,
            'prodcount' => $prodcount,
            'categories' => $categories,
        ]);
    }

    public function filter(Request $request){

        //$aa = DB::table('attribute_families')->where('name', $slug)->first();


        //$attri_name = '0';


        $filter = $request->atr;
        $search_term = $request->catalogSearch;
        //dd($search_term);
        $locale = app()->getLocale();


        $currentChannel = core()->getCurrentChannel();
        $sliderData = $this->sliderRepository->findByField('channel_id', $currentChannel->id)->toArray();
        $product = $this->product;

        if($filter){

            $all_prod = DB::table('product_flat')->whereIn('CoffeeWeight_label', $filter)->where('locale', $locale)->whereNotNull('url_key')->groupBy('parent_id')->get(); //Add url to products
            //dd($filter, $all_prod);

        } else if($search_term) {

            $all_prod = DB::table('product_flat')->where('name', $search_term)->where('locale', $locale)->whereNotNull('url_key')->get();

        } else {

            $all_prod = DB::table('product_flat')->whereNotNull('url_key')->whereNotNull('name')->where('locale', $locale)->get();

        }

        $image = DB::table('product_images')->get();
        $prodcount = $all_prod->count();
        //dd($filter);

        //return redirect('/');
        $categories = DB::table('category_translations')->where('locale', $locale)->get();

        return view($this->_config['view'], compact('sliderData'),[
            'product' => $product,
            'all_prod' => $all_prod,
            'image' => $image,
            'filter' => $filter,
            'prodcount' => $prodcount,
            'categories' => $categories,
        ]);

    }

    /**
     * loads the home page for the storefront
     */
    public function notFound()
    {
        abort(404);
    }
}