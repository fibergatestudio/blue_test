<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\TrainingsSubscription;
use Carbon\Carbon;

use App\CustomerAddresses;
use App\Customers;

use Redirect;

class TrainingsController extends Controller
{
    public function index($training_id){

        //dd($training_id);

        $customer = auth()->guard('customer')->user();
        //dd($subscription);
        
        $training = DB::table('tasks')->where('id', $training_id)->first();


        if(!$customer){

            return view('TrainingsSubscription',[
                'training' => $training,
            ]);
            
        } else {

            $address = DB::table('customer_addresses')->where('customer_id', $customer->id)->first();
            $trainings_sub = DB::table('trainings_subscription')->where('user_id', $customer->id)->first();

            return view('TrainingsSubscription',[
                'customer' => $customer,
                'address' => $address,
                'trainings_sub' => $trainings_sub,
                'training' => $training,
            ]);
        }

    }

    public function newUserSub($first_name, $last_name, $email, $password, $address1, $address2, $country, $city, $postcode, $phone, $sub_name, $subscription_term, $price, $ship_quantity, $ship_frequency){


        //dd($first_name, $last_name, $email, $password);
        //Create Customer
        $new_customer = new Customers();
        $new_customer->channel_id = '1';
        $new_customer->first_name = $first_name;
        $new_customer->last_name = $last_name;
        $new_customer->email = $email;

        $password_enc = bcrypt(rand(100000,10000000));
        $password = $password_enc;
        //dd($password);
        $new_customer->password = $password;
        $new_customer->customer_group_id = '2';
        $new_customer->save();

        //return back();

        //Create Customer Address
        $new_address = new CustomerAddresses();
        $new_address->customer_id = $new_customer->id;
        $new_address->address1 = $address1;
        $new_address->address2 = $address2;
        $new_address->country = $country;
        $new_address->city = $city;
        $new_address->postcode = $postcode;
        $new_address->phone = $phone;
        $new_address->default_address = '1';
        $new_address->save();

        //dd($new_address);

        //Create New Customer Subscribe
        $new_sub = new TrainingsSubscription();
        $new_sub->user_id = $new_customer->id;
        $new_sub->subscription_name = $sub_name;

        $new_sub->subscription_term = $subscription_term;
        $new_sub->subscription_term_starts = Carbon::now();


        if($subscription_term == "3 Months"){
        
            $sub_end = Carbon::now()->addMonths(3);

        } else if($subscription_term == "6 Months"){

            $sub_end = Carbon::now()->addMonths(6);

        } else if($subscription_term == "9 Months"){
            
            $sub_end = Carbon::now()->addMonths(9);
        }

        $new_sub->subscription_term_ends = $sub_end;
        $new_sub->price = $price;
        $new_sub->ship_quantity = $ship_quantity;
        $new_sub->ship_frequency = $ship_frequency;
        $new_sub->save();

        //dd($new_sub);
        //return Redirect::to(('/coffeesubscription') . "#changeOrder")->withErrors('Subscription Changed');

    
    }

    public function subscribe(Request $request){

        $user_id = $request->user_id;
        $sub_name = $request->subscription_name;

        $checker = DB::table('trainings_subscription')->where('user_id', $user_id)->first();

        if($user_id == 'null'){

            //Customer
            $first_name = $request->first_name;
            $last_name = $request->last_name;
            $email = $request->email;
            $password = $request->password;

            //Address
            $address1 = $request->address1;
            $address2 = $request->address2;
            $country = $request->country;
            $city = $request->city;
            $postcode = $request->zip;
            $phone = $request->phone;

            //Sub
            $subscription_term = $request->subscription_term;
            $price = $request->price;
            $ship_quantity = $request->ship_quantity;
            $ship_frequency = $request->ship_frequency;

            $this->newUserSub($first_name, $last_name, $email, $password, $address1, $address2, $country, $city, $postcode, $phone, $sub_name, $subscription_term, $price, $ship_quantity, $ship_frequency);
            return Redirect::to(('/coffeesubscription') . "#changeOrder")->withErrors('Subscription Changed');

        } else {

             if(!$checker){

                $new_sub = new TrainingsSubscription();
                $new_sub->user_id = $user_id;
                $new_sub->subscription_name = $sub_name;
                $subscription_term = $request->subscription_term;
                //dd($subscription_term);
                $new_sub->subscription_term = $subscription_term;
                $new_sub->subscription_term_starts = Carbon::now();


                if($subscription_term == "3 Months"){
                
                    $sub_end = Carbon::now()->addMonths(3);

                } else if($subscription_term == "6 Months"){

                    $sub_end = Carbon::now()->addMonths(6);

                } else if($subscription_term == "9 Months"){
                    
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

                if($subscription_term == "3 Months"){
                
                    $sub_end = Carbon::now()->addMonths(3);

                } else if($subscription_term == "6 Months"){

                    $sub_end = Carbon::now()->addMonths(6);

                } else if($subscription_term == "9 Months"){
                    
                    $sub_end = Carbon::now()->addMonths(9);
                }

                $sub_price = $request->price;
                $ship_quan = $request->ship_quantity;
                $ship_freq =$request->ship_frequency;

                            
                DB::table('trainings_subscription')
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



                //return Redirect::back()->withErrors('Subscription Changed');
                //return Redirect::to(('/coffeesubscription') . "#changeOrder")->withErrors('Subscription Changed');

            }
        }

       

        return back();
    }
}
