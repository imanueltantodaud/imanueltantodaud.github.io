<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_id');
            $table->string('number_views');
            $table->string('name');
            $table->string('total_time');
            $table->text('description');
            $table->string('video');
            $table->string('video_attachments')->nullable();
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
        Schema::dropIfExists('video_courses');
    }
}
