<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Doctable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('documents', function (Blueprint $table) {
            $table->increments('id_document');
            $table->string('titre')->unique();
            $table->string('nom_fichier')->nullable();
            $table->string('avatar')->default('papier.jpg')->nullable();
            $table->string('nom_video')->nullable();
            $table->date('date_publication');
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
        Schema::create('documents');
    }
}
