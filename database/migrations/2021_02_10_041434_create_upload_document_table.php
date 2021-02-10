<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload_document', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('lecture_id');
            $table->foreign('lecture_id')->references('id')->on('lecture');
            $table->string('doc_name');
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
        Schema::dropIfExists('upload_document');
    }
}
