<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaqQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->text('question');
            $table->longText('answer');
            $table->string('category');
            $table->timestamps();
        });

        $values = [
            ['id' => 1, 'question' => 'How can I subscribe to fresh roasted coffee?', 'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum est ratione, minima accusamus consectetur voluptate velit, iure rerum iste similique.', 'category' => 'Registration'],
            ['id' => 2, 'question' => 'Why is subscribing to fresh roasted coffee beneficial?', 'answer' => 'If you are subscribed to any of our fresh roasted coffee blends made by Blue Bird Café, you get fresh roasted coffee delivered to your doorstep for a reasonable price each month. You can read more about subscription to fresh roasted coffee blends and the advantages of home delivery here.', 'category' => 'Registration']
        ];

        DB::table('faq_questions')->insert($values);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faq_questions');
    }
}
