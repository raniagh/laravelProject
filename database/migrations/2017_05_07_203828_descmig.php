<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Descmig extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descriptions', function (Blueprint $table) {
            $table->increments('id_description');
            $table->string('titre');
            $table->string('contenu');
            $table->integer('id_document')->unsigned();
            $table->foreign('id_document')->references('id_document')->on('documents')->onDelete('cascade');
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
      
        Schema::drop('descriptions');
    }
}
