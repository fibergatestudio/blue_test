<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingsEditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings_edit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('training_number');
            $table->string('training_name');
            $table->longText('training_description');
            $table->longText('training_location');
            $table->longText('training_cost');
            $table->longText('training_structure');
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
        Schema::dropIfExists('trainings_edit');
    }
}
