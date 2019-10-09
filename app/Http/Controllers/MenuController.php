<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use Webkul\Admin\Mail\NewMail;

use DB;
use Auth;
use Validator;
use Hash;
use Cookie;
use App\ContactForm;
use App\Customers;
use App\Task;
use App\FaqQuestion;

class MenuController extends Controller
{
    protected $faq_categories = ['registration' => 'Registration','subscribe' => 'Subscribe','coffee-shop' => 'Coffee Shop','blue-box' => 'Blue Box','loyalty-program' => 'Loyalty Program','payment-and-shipping' => 'Payment and Shipping','trainings' => 'Trainings','for-business' => 'For Business'];

    public function MainPage(Request $request){

        $locale = app()->getLocale();

        $all_prod = DB::table('product_flat')->whereNotNull('url_key')->where('locale', $locale)->get();

        $image = DB::table('product_images')->get();


        //referal
                             
        $value = $request->cookie('name');

        if($value) {

        } else {
            
        }

        return view('MainPage',[

            'all_prod' => $all_prod,
            'image' => $image,
            'value' => $value

        ]);

    }

    public function Referal(Request $request, $user_id){

        $minutes = '5';

        $cookie = cookie('name', $user_id, $minutes);
        //dd($cookie);

        //return response('Hello World')->cookie($cookie);

        //return redirect('/')->cookie($cookie);

        //$cookie = Cookie::make('user_id', $user_id);
        return Redirect::to('/')->withCookies([$cookie]);

    }

    public function OnlineShop(){
        
        return view('OnlineShop');

    }

    public function BlueBox(){
        
        return view('BlueBox');

    }


    public function FAQ($question_category=''){
        
        $faq_questions = FaqQuestion::all();
        
        return view('FAQ',['question_category' => $question_category, 'faq_categories' => $this->faq_categories, 'faq_questions' => $faq_questions]);
    } 


    public function FAQShow(){
               
        return view('FAQShow',['faq_categories' => $this->faq_categories]);
    }  


    public function FAQAdd(Request $request){

        $faq_question = new FaqQuestion();
        $faq_question->question = $request->question;
        $faq_question->answer = $request->answer;
        $faq_question->category = $request->category;
        $faq_question->save();
        $success = 'The question saved successfully !';
        return view('FAQShow',['faq_categories' => $this->faq_categories, 'success' => $success]);
    } 


    public function Contacts(){
        
        return view('Contacts');

    }

    public function BasketBox(){
        
        return view('BasketBox');

    }

    //-- PAGES --//
    public function TermsAndConditions(){

        return view('TermsAndConditions');

    }

    public function LoyaltyProgram(){

        return view('LoyaltyProgram');

    }

    public function PaymentAndShipping(){

        return view('PaymentAndShipping');
    }

    public function Shipping(){

        return view('Shipping');
    }

    public function AboutUs(){

        return view('AboutUs');
    }

    public function OurCoffee(){

        return view('OurCoffee');
    }

    public function AboutBBGroup(){

        return view('AboutBBGroup');

    }

    public function AboutOurCafe(){

        return view('AboutOurCafe');

    }

    public function BlueGiftBox(){

        $locale = app()->getLocale();

        $all_prod = DB::table('product_flat')->whereNotNull('url_key')->where('locale', $locale)->where('name', '4x250g Coffee beans')->get();

        $image = DB::table('product_images')->get();

        return view('BlueCoffeeGiftBox',[

            'all_prod' => $all_prod,
            'image' => $image

        ]);

    }

    public function CoffeeCapsules(){

        $locale = app()->getLocale();

        $all_prod = DB::table('product_flat')->whereNotNull('url_key')->where('locale', $locale)->get();

        $image = DB::table('product_images')->get();

        return view('CoffeeCapsules',[

            'all_prod' => $all_prod,
            'image' => $image

        ]);

    }

    public function CoffeeBeans(){

        $locale = app()->getLocale();

        $all_prod = DB::table('product_flat')->whereNotNull('url_key')->where('locale', $locale)->get();

        $image = DB::table('product_images')->get();

        return view('CoffeeBeans',[

            'all_prod' => $all_prod,
            'image' => $image

        ]);

    }

    public function FlavoredCoffee(){

        $locale = app()->getLocale();

        $all_prod = DB::table('product_flat')->whereNotNull('url_key')->where('locale', $locale)->get();

        $image = DB::table('product_images')->get();

        return view('FlavoredCoffee',[

            'all_prod' => $all_prod,
            'image' => $image

        ]);

    }

    public function Services(){

        return view('Services');

    }

    public function TurkishCoffee(){

        return view('TurkishCoffee');

    }

    public function ForBusinesses(){

        return view('ForBusinesses');
    }

    public function BaristaTrainings(){

        $tasks = Task::all();

        return view('BaristaTrainings', compact('tasks'));
    }

    //-- Tutorials --//
    public function Tutorials(){

        return view('Tutorials');

    }
        //-- Tutorials - Aeropress --//
        public function Aeropress(){

            return view('tutorials.Aeropress');

        }

    public function FormSumbit(Request $request){

        if($request->page_from){

            try {

                $email = $request->email;
                $page_from = $request->page_from;
                $name = $request->name;

                Mail::queue(new NewMail($email, $page_from, $name));
            } catch (\Exception $e) {

                dd($e);

            }

        }


        
        $contact = new ContactForm();
        $contact->name = $request->name;
        $contact->phone = $request->tel;
        $contact->email = $request->email;
        $contact->symptom = $request->symptom;
        $contact->save();

        //return back();
        
        return back()->with('message_sent', 'open');
    }

    public function admin_credential_rules(array $data){

        $messages = [
            'current_password.required' => 'Please enter current password',
            'password.required' => 'Please enter password',
        ];

        $validator = Validator::make($data, [
            'current_password' => 'required',
            'password' => 'required|same:password',
            'password_confirmation' => 'required|same:password',     
        ], $messages);

        return $validator;
    }  

    public function ChangePassword(Request $request){

        $test = auth()->guard('customer')->user();
        //dd($test);


        // if(Auth::Check())
        // {
            $request_data = $request->All();
            //dd($request_data);
            $validator = $this->admin_credential_rules($request_data);

            if($validator->fails()) {
                return redirect()->back()->with('paserror', ['your message,here']);

                //return response()->json(array('error' => $validator->getMessageBag()->toArray()), 400);
                //return Redirect::back()->withErrors(['Re-Check Password', 'The Message']);
                //return Redirect::back()->withInput()->withErrors($your_message_bag->all());

            } else {  
 
                $current_password = $test->password;           

                if(Hash::check($request_data['current_password'], $current_password)) {    

                    $user_id = $test->id;                       
                    $obj_user = Customers::find($user_id);
                    $obj_user->password = Hash::make($request_data['password']);;
                    $obj_user->save(); 
                    //return "ok";

                    //return Redirect::back()->withErrors(['password', 'password']);
                    return redirect()->back()->with('password', ['your message,here']);

                } else {           
                    $error = array('current_password' => 'Please enter correct current password');
                    return response()->json(array('error' => $error), 400);   
                }
            }   

        // } else {

        //     return redirect()->to('/');

        // }    
    }

}
