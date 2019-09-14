<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function test(){
        return view('test');

    }

    public function MainPage(){

        return view('MainPage');

    }

    public function OnlineShop(){
        
        return view('OnlineShop');

    }

    public function BlueBox(){
        
        return view('BlueBox');

    }

    public function FAQ(){
        
        return view('FAQ');

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

    public function ForBusinesses(){

        return view('ForBusinesses');
    }

    public function BaristaTrainings(){

        return view('BaristaTrainings');
    }

    //-- Tutorials --//
    public function Tutorials(){

        return view('Tutorials');

    }
        //-- Tutorials - Aeropress --//
        public function Aeropress(){

            return view('tutorials.Aeropress');

        }

}
