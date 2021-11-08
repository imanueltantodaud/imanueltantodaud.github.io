<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseSetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_setups', function (Blueprint $table) {
            $table->id();
            $table->string('enrolled_course_id');
            $table->string('video_banner')->nullable();
            $table->text('weekly_title');
            $table->text('weekly_video_content');
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
        Schema::dropIfExists('course_setups');
    }
}
