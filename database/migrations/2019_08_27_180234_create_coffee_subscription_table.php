<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoffeeSubscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coffee_subscription', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('subscription_name')->nullable();
            $table->string('subscription_term')->nullable();
            $table->string('subscription_term_starts')->nullable();
            $table->string('subscription_term_ends')->nullable();
            $table->string('ship_frequency')->nullable();
            $table->string('ship_quantity')->nullable();
            $table->string('price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coffee_subscription');
    }
}
