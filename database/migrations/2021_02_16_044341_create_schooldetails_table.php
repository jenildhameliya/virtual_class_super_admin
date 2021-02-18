<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchooldetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schooldetails', function (Blueprint $table) {
            $table->bigIncrements('scl_id');
            $table->unsignedbigInteger('plan_id');
            $table->foreign('plan_id')->references('plan_id')->on('plans');
            $table->string('scl_name');
            $table->string('type');
            $table->text('address');
            $table->unsignedbigInteger('usertable_id');
            $table->foreign('usertable_id')->references('usertable_id')->on('usertabels');
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
        Schema::dropIfExists('schooldetails');
    }
}
