<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('gender');
            $table->date('dob');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('password');
            $table->string('qualification');
            $table->string('experience');
            $table->date('doj');
            $table->string('avatar')->nullable();
            $table->unsignedbigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('role');
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
        Schema::dropIfExists('user');
    }
}
