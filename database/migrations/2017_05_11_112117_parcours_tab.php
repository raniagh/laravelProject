<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ParcoursTab extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('parcours', function (Blueprint $table) {
            $table->increments('id_parcours');
            $table->date('date_echeance');
            $table->integer('id_agent')->nullable()->unsigned();
            $table->foreign('id_agent')->references('id_personne')->on('personnes')->onDelete('cascade');
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
       Schema::drop('parcours');
    }
}
