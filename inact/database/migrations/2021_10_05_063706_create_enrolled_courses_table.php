<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrolledCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrolled_courses', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('payment_method');
            $table->string('course_id');
            $table->string('course_fee');
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->string('country_id');
            $table->string('state');
            $table->string('zip_code');
            $table->string('payment_status')->nullable();
            $table->text('payment_response')->nullable();
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
        Schema::dropIfExists('enrolled_courses');
    }
}
