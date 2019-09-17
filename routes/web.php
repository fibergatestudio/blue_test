<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//-- TEST --//
Route::get('/test', 'MenuController@test');

//-- MENU PAGES --//
    //-- MainPage --//
    Route::get('/MainPage', 'MenuController@MainPage');

    //-- OnlineShop --//
    Route::get('/', 'MenuController@OnlineShop');

    //-- BlueBox --//
    Route::get('/bluebox', 'MenuController@BlueBox');

    //-- CoffeeSubscription --//
    Route::get('/coffeesubscription', 'CoffeeSubscriptionController@index');
        //-- Coffee Subscription Payment --//
        Route::get('/coffeesubscription/payment', 'CoffeeSubscriptionController@payment');
        //-- Coffee Subscription POST --//
        Route::post('/coffeesubscription/subscribe', 'CoffeeSubscriptionController@subscribe');

    //-- FAQ --//
    Route::get('/faq', 'MenuController@FAQ');

    //-- Contacts --//
    Route::get('/contacts', 'MenuController@Contacts');

    //-- BasketBox --//
    Route::get('/basketbox', 'MenuController@BasketBox');

//-- OTHER PAGES --//

        //-- About BB Group --//
        Route::get('/aboutbb', 'MenuController@AboutBBGroup');
        //-- About Our Cafe --//
        Route::get('/aboutcafe', 'MenuController@AboutOurCafe');
        //-- AboutUs --//
        Route::get('/aboutus', 'MenuController@AboutUs');

    //-- TermsAndConditionsPrivacyPolicy --//
    Route::get('/terms', 'MenuController@TermsAndConditions');

    //-- LoyaltyProgram --//
    Route::get('/loyality', 'MenuController@LoyaltyProgram');
        //Route::post()

    //-- Tutorials --//
    Route::get('/tutorials', 'MenuController@Tutorials');
        //-- Tutorial Aeropress --//
        Route::get('/tutorials/aeropress', 'MenuController@Aeropress');

    //-- PaymentAndShipping --//
    Route::get('/paymentandshipping', 'MenuController@PaymentAndShipping');
    //-- Shipping --//
    Route::get('/shipping', 'MenuController@Shipping');


    //-- OurCoffee --//
    Route::get('/ourcoffee', 'MenuController@OurCoffee');

    //-- For Businesses --//
    Route::get('/forbusinesses', 'MenuController@ForBusinesses');

    //-- BaristaTrainings --//
    Route::get('/baristatrainings', 'MenuController@BaristaTrainings');

    //-- Pages --//
    Route::get('pages/{page}', 'PageController@index');
        //-- Create Page --//
        Route::post('/pages/createpage', 'PageController@createPage');
        // //-- Create Page --//
        // Route::post('/deletepage/{page_id}', 'PageController@deletePage');
        // //-- Create Page --//
        // Route::post('/editpage/{page_id}', 'PageController@editPage');


