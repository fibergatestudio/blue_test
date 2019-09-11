<?php

namespace Webkul\Admin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class StatisticController extends Controller
{
    //
    protected $_config;


    public function index()
    {
        // Total Custom Count
        $customer_count = DB::table('customers')->count();
        // Total Orders Count
        $total_orders = DB::table('orders')->count();
        // Total Customers Points
        $total_customers_points = DB::table('customers')->sum('points');
        // Total Customers Used Points
        $total_customers_used_points = DB::table('customers')->sum('used_points');
        
        // Total Orders Sum
        $total_orders_sum = DB::table('orders')->sum('sub_total');

        // Average Sell Sum
        $average_sell_sum = ($total_orders_sum / $total_orders);

        return view('Statistic.index',[
            'customer_count' => $customer_count,
            'total_orders' => $total_orders,
            'total_customers_points' => $total_customers_points,
            'total_customers_used_points' => $total_customers_used_points,
            'total_orders_sum' => $total_orders_sum,
            'average_sell_sum' => $average_sell_sum,
        ]);
        //return view('BaristaTrainings');
    }
}
