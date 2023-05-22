<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PersonneTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnes', function (Blueprint $table) {
            $table->increments('id_personne');
            $table->string('nom');
            $table->string('prenom');
            $table->string('cin')->unique()->nullable();
            $table->string('Num_tel');
            $table->string('adresse')->nullable();
            $table->string('region')->nullable();
            $table->string('role')->nullable();
            $table->boolean('etat')->nullable();
            $table->string('agen')->default('default.jpg')->nullable();
            $table->string('email')->unique();
            $table->string('password');
             $table->double('altitude')->nullable();
            $table->double('longitude')->nullable();
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
        Schema::drop('personnes');
    }
}
