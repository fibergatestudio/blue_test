<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Webkul\Customer\Repositories\CustomerRepository as Customer;

use App\CoffeeSubsctiption;

use Auth;
use DB;
use Redirect;
use Carbon\Carbon;

class CoffeeSubscriptionController extends Controller
{

    public function __construct(
        Customer $customer
    )
    {
        $this->customer = $customer;
    }

    public function index(){

        $customer = auth()->guard('customer')->user();

        //dd($customer);

        if(!$customer){

            return view('CoffeeSubscription');
            
        } else {

            return view('CoffeeSubscription',[
                'customer' => $customer
            ]);

        }

        //dd($customer);
        

    }

    public function subscribe(Request $request){

        $user_id = $request->user_id;
        $sub_name = $request->subscription_name;

        $checker = DB::table('coffee_subscription')->where('user_id', $user_id)->first();

        if(!$checker){

            $new_sub = new CoffeeSubsctiption();
            $new_sub->user_id = $user_id;
            $new_sub->subscription_name = $sub_name;
            $subscription_term = $request->subscription_term;
            $new_sub->subscription_term = $subscription_term;
            $new_sub->subscription_term_starts = Carbon::now();


            if($subscription_term == "3 Month"){
               
                $sub_end = Carbon::now()->addMonths(3);

            } else if($subscription_term == "6 Month"){

                $sub_end = Carbon::now()->addMonths(6);

            } else if($subscription_term == "9 Month"){
                
                $sub_end = Carbon::now()->addMonths(9);
            }

            $new_sub->subscription_term_ends = $sub_end;
            $new_sub->price = $request->price;
            $new_sub->ship_quantity = $request->ship_quantity;
            $new_sub->ship_frequency = $request->ship_frequency;
            $new_sub->save();

            //return Redirect::back()->withErrors('JUST SUBBED');
            return back();

        } else {


            $subscription_term = $request->subscription_term;

            $sub_start = Carbon::now();

            if($subscription_term == "3 Month"){
               
                $sub_end = Carbon::now()->addMonths(3);

            } else if($subscription_term == "6 Month"){

                $sub_end = Carbon::now()->addMonths(6);

            } else if($subscription_term == "9 Month"){
                
                $sub_end = Carbon::now()->addMonths(9);
            }

            $sub_price = $request->price;
            $ship_quan = $request->ship_quantity;
            $ship_freq =$request->ship_frequency;

            
            DB::table('coffee_subscription')
            ->where('user_id', $user_id)
            ->limit(1)
            ->update([
                'subscription_name' => $sub_name,
                'subscription_term' => $subscription_term,
                'subscription_term_starts' => $sub_start,
                'subscription_term_ends' => $sub_end,
                'price' => $sub_price,
                'ship_quantity' => $ship_quan,
                'ship_frequency' => $ship_freq
                ]);



            return Redirect::back()->withErrors('Subscription Changed');

        }

       


        //return back();

    }


}
