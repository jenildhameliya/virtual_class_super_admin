<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('stu_id');
            $table->unsignedbigInteger('class_id');
            $table->foreign('class_id')->references('classes_id')->on('classes');
            $table->unsignedbigInteger('country_id');
            $table->foreign('country_id')->references('country_id')->on('countries');
            $table->unsignedbigInteger('state_id');
            $table->foreign('state_id')->references('state_id')->on('states');
            $table->unsignedbigInteger('city_id');
            $table->foreign('city_id')->references('city_id')->on('cities');
            $table->string('admission_num');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('gender');
            $table->date('dob');
            $table->text('address');
            $table->unsignedbigInteger('category_id');
            $table->foreign('category_id')->references('category_id')->on('categories');
            $table->string('religion')->nullable();
            $table->bigInteger('mobile_no');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('admission_date');
            $table->string('profile')->nullable();
            $table->string('father_name');
            $table->string('father_occupation');
            $table->bigInteger('father_phone');
            $table->string('mother_name');
            $table->string('mother_occupation');
            $table->bigInteger('mother_phone')->nullable();
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
        Schema::dropIfExists('students');
    }
}
