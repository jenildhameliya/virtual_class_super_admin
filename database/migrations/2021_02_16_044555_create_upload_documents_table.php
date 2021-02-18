<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload_documents', function (Blueprint $table) {
            $table->bigIncrements('doc_id');
            $table->unsignedbigInteger('lecture_id');
            $table->foreign('lecture_id')->references('lecture_id')->on('lectures');
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
        Schema::dropIfExists('upload_documents');
    }
}
