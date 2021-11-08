<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_options', function (Blueprint $table) {
            $table->id();
            $table->string('question_id')->nullable();
            $table->string('option_a');
            $table->string('option_answer_a');
            $table->string('option_b');
            $table->string('option_answer_b');
            $table->string('option_c');
            $table->string('option_answer_c');
            $table->string('option_d');
            $table->string('option_answer_d');
            $table->bigInteger('flags')->default('0');
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
        Schema::dropIfExists('quiz_options');
    }
}
