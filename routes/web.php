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

Route::group(['middleware' => ['web', 'locale', 'theme', 'currency']], function () {
//-- TEST --//
Route::get('/test', 'MenuController@test');

//-- MENU PAGES --//
    //-- MainPage --//
    Route::get('/', 'MenuController@MainPage');

    //-- OnlineShop --//
    //Route::get('/', 'MenuController@OnlineShop');

    //-- BlueBox --//
    Route::get('/bluebox', 'MenuController@BlueBox');

    //-- CoffeeSubscription --//
    Route::get('/coffeesubscription', 'CoffeeSubscriptionController@index');
        //-- Coffee Subscription Payment --//
        Route::post('/coffeesubscription/payment', 'CoffeeSubscriptionController@payment'); 
        //-- Coffee Subscription POST --//
        Route::post('/coffeesubscription/subscribe', 'CoffeeSubscriptionController@subscribe');

    //-- Tranings --//
    Route::get('/trainings/{training_id}', 'TrainingsController@index');
        //-- Tranings Subscription POST --//
        Route::post('/trainings/subscribe', 'TrainingsController@subscribe');


    //-- FAQ --//
    Route::get('/faq', 'MenuController@FAQ'); 
    Route::get('/faq/registration', 'MenuController@faq_registration'); 
    Route::get('/faq/subscribe', 'MenuController@faq_subscribe'); 
    Route::get('/faq/blue-box', 'MenuController@faq_blue_box');
    Route::get('/faq/coffee-shop', 'MenuController@faq_coffee_shop');  
    Route::get('/faq/loyalty-program', 'MenuController@faq_loyality_program');  
    Route::get('/faq/payment-and-shipping', 'MenuController@faq_payment_and_shipping');  
    Route::get('/faq/trainings', 'MenuController@faq_trainings');  
    Route::get('/faq/for-business', 'MenuController@faq_for_business'); 

    // //-- Contacts --//
    // Route::get('/contacts', 'MenuController@Contacts');

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
    Route::get('/loyalty', 'MenuController@LoyaltyProgram');
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

    //-- Coffee Capsules --//
    Route::get('/coffeecapsules', 'MenuController@CoffeeCapsules');

    //-- Coffee Beans --//
    Route::get('/coffeebeans', 'MenuController@CoffeeBeans');

    //-- Flavored Coffee --//
    Route::get('/flavoredcoffee', 'MenuController@FlavoredCoffee');

    //-- Blue Coffee Gift Box --//
    Route::get('/bluecoffeegiftbox', 'MenuController@BlueGiftBox');
    
    //-- For Businesses --//
    Route::get('/forbusinesses', 'MenuController@ForBusinesses');

    //-- Services --//
    Route::get('/services', 'MenuController@Services');

        //-- Contact Form --//
        Route::post('/form_sumbit', 'MenuController@FormSumbit');

    //-- Turkish Coffee --//
    Route::get('/turkishcoffee', 'MenuController@TurkishCoffee');

    //-- BaristaTrainings --//
    Route::get('/baristatrainings', 'MenuController@BaristaTrainings');
    Route::get('/baristatrainings/{training_name}', 'MenuController@BaristaTrainingsFilter');
        //--BARISTA TASKS--//
        Route::resource('tasks', 'TasksController');

    //-- Pages --//
    Route::get('pages/{page}', 'PageController@index');
        //-- Create Page --//
        Route::post('/pages/createpage', 'PageController@createPage');
        // //-- Create Page --//
        // Route::post('/deletepage/{page_id}', 'PageController@deletePage');
        // //-- Create Page --//
        // Route::post('/editpage/{page_id}', 'PageController@editPage');


    //-- TEST --//
    Route::get('checkout_success', 'PageController@success');
    Route::get('checkout_error', 'PageController@error');

    //-- CHANGE PASSWORD --//
    Route::post('/change_password', 'MenuController@ChangePassword');


    //-- REFERAL --//

    Route::get('/referal/{user_id}', 'MenuController@Referal');

    Route::get('/contacts', 'MenuController@Contacts');

});


