<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructorCourseRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructor_course_requests', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('name');
            $table->string('country');
            $table->text('resume');
            $table->string('course_name');
            $table->text('lecture_sample');
            $table->string('course_syllabus');
            $table->string('course_instructor');
            $table->string('course_proposal');
            $table->string('course_support');
            $table->text('course_description');
            $table->string('course_duration');
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
        Schema::dropIfExists('instructor_course_requests');
    }
}
