<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_user_id');
            $table->string('course_title');
            $table->text('course_description');
            $table->string('course_price');
            $table->string('course_duration');
            $table->string('weekly_study');
            $table->text('course_content');
            $table->string('number_students');
            $table->string('projects')->nullable();
            $table->text('about_course')->nullable();
            $table->text('about_brief')->nullable();
            $table->text('author_description')->nullable();
            $table->string('related_courses')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
