<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sessiontable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donnees', function (Blueprint $table) {
            $table->increments('id_donne');
            $table->integer('count')->nullable();
            $table->integer('id_personne')->nullable();
            $table->integer('id_service')->nullable();
        
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
         Schema::drop('donnees');
    }
}
