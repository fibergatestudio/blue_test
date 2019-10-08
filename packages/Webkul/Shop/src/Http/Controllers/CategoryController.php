<?php

namespace Webkul\Shop\Http\Controllers;

use Webkul\Shop\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Webkul\Category\Repositories\CategoryRepository as Category;
use Webkul\Product\Repositories\ProductRepository as Product;
use Webkul\Core\Repositories\SliderRepository;

use DB;

/**
 * Category controller
 *
 * @author    Prashant Singh <prashant.singh852@webkul.com> @prashant-webkul
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class CategoryController extends Controller
{

    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    /**
     * CategoryRepository object
     *
     * @var array
     */
    protected $category;

    /**
     * ProductRepository object
     *
     * @var array
     */
    protected $product;

    protected $sliderRepository;

    /**
     * Create a new controller instance.
     *
     * @param  \Webkul\Category\Repositories\CategoryRepository $category
     * @param  \Webkul\Product\Repositories\ProductRepository $product
     * @return void
     */
    public function __construct(Category $category, Product $product, SliderRepository $sliderRepository)
    {
        $this->product = $product;

        $this->category = $category;

        $this->sliderRepository = $sliderRepository;

        $this->_config = request('_config');
    }

    /**
     * Display a listing of the resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $slug)
    {

        $aa = DB::table('attribute_families')->where('name', $slug)->first();

        if($aa){
            $attri_name = $aa->id;
        } else {
            $attri_name = '0';
        }

        $filter = $request->atr;
        $locale = app()->getLocale();

        $category = $this->category->findBySlugOrFail($slug);

        $currentChannel = core()->getCurrentChannel();
        $sliderData = $this->sliderRepository->findByField('channel_id', $currentChannel->id)->toArray();
        $product = $this->product;

        $cat_id = $category->id;

        $prodz = DB::table('product_categories')->where('category_id', $cat_id)->get();

        //dd($prodz);
        $items = array();
        foreach($prodz as $prod){
            $items[] = $prod->product_id;
        }
        //dd($items);

        $test = DB::table('product_flat')->whereIn('product_id', $items)->limit(20)->get();

        //dd($test);

        if($filter){

            //$all_prod = DB::table('product_flat')->whereIn('CoffeeWeight_label', $filter)->where('locale', $locale)->limit(20)->groupBy('parent_id')->get();
            $all_prod = DB::table('product_flat')->whereIn('CoffeeWeight_label', $filter)->where('product_id', $items)->groupBy('parent_id')->paginate(2);

        } else {

            //$all_prod = DB::table('product_flat')->whereNotNull('url_key')->where('locale', $locale)->limit(20)->get();
            $all_prod = DB::table('product_flat')->whereIn('product_id', $items)->whereNotNull('name')->paginate(2);

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
            'category' => $category,
            'categories' => $categories,
            'slug' => $slug,
            'attri_name' => $attri_name,
        ]);

    }

    public function index_filter(Request $request, $slug){




        $aa = DB::table('attribute_families')->where('name', $slug)->first();

        if($aa){
            $attri_name = $aa->id;
        } else {
            $attri_name = '0';
        }

        $filter = $request->atr;
        $locale = app()->getLocale();

        $category = $this->category->findBySlugOrFail($slug);

        $currentChannel = core()->getCurrentChannel();
        $sliderData = $this->sliderRepository->findByField('channel_id', $currentChannel->id)->toArray();
        $product = $this->product;

        $cat_id = $category->id;

        $prodz = DB::table('product_categories')->where('category_id', $cat_id)->get();

        //dd($prodz);
        $items = array();
        foreach($prodz as $prod){
            $items[] = $prod->product_id;
        }
        //dd($items);

        $test = DB::table('product_flat')->whereIn('product_id', $items)->limit(20)->get();

        //dd($test);

        if($filter){

            //$all_prod = DB::table('product_flat')->whereIn('CoffeeWeight_label', $filter)->where('locale', $locale)->limit(20)->groupBy('parent_id')->get();
            $all_prod = DB::table('product_flat')->whereIn('CoffeeWeight_label', $filter)->where('product_id', $items)->groupBy('parent_id')->get();

        } else {

            //$all_prod = DB::table('product_flat')->whereNotNull('url_key')->where('locale', $locale)->limit(20)->get();
            $all_prod = DB::table('product_flat')->whereIn('product_id', $items)->whereNotNull('name')->get();

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
            'category' => $category,
            'categories' => $categories,
            'slug' => $slug,
            'attri_name' => $attri_name,
        ]);


    }
}
