<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsertabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usertabels', function (Blueprint $table) {
            $table->bigIncrements('usertable_id');
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
            $table->foreign('role_id')->references('role_id')->on('roles');
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
        Schema::dropIfExists('usertabels');
    }
}
