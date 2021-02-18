<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectures', function (Blueprint $table) {
            $table->bigIncrements('lecture_id');
            $table->unsignedbigInteger('user_id');
            $table->foreign('user_id')->references('usertable_id')->on('usertabels');
            $table->unsignedbigInteger('class_id');
            $table->foreign('class_id')->references('classes_id')->on('classes');
            $table->unsignedbigInteger('subject_id');
            $table->foreign('subject_id')->references('sub_id')->on('subjects');
            $table->string('description');
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
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
        Schema::dropIfExists('lectures');
    }
}
