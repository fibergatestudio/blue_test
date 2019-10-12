<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaqCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->text('category_name');
            $table->text('slug');
            $table->timestamps();
        });

        $values = [ 
            ['id' => 1, 'slug' => 'registration', 'category_name' => 'Registration'],
            ['id' => 2, 'slug' => 'subscribe', 'category_name' => 'Subscribe'],
            ['id' => 3, 'slug' => 'coffee-shop', 'category_name' => 'Coffee Shop'],
            ['id' => 4, 'slug' => 'blue-box', 'category_name' => 'Blue Box'],
            ['id' => 5, 'slug' => 'loyalty-program', 'category_name' => 'Loyalty Program'],
            ['id' => 6, 'slug' => 'payment-and-shipping', 'category_name' => 'Payment and Shipping'],
            ['id' => 7, 'slug' => 'trainings', 'category_name' => 'Trainings'],
            ['id' => 8, 'slug' => 'for-business', 'category_name' => 'For Business'],
        ];

        DB::table('faq_categories')->insert($values);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faq_categories');
    }
}
