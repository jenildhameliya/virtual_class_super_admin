<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchooldetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schooldetail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('plan_id');
            $table->foreign('plan_id')->references('id')->on('plan');
            $table->string('scl_name');
            $table->string('type');
            $table->text('address');
            $table->unsignedbigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('user');
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
        Schema::dropIfExists('schooldetail');
    }
}
