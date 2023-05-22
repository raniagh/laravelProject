<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServiceMigr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('services', function (Blueprint $table) {
            $table->increments('id_service');
            $table->string('designation');
            $table->string('description');
            $table->string('point_depart');
            $table->string('point_arrive');
            $table->date('date_echeance');
            $table->boolean('type');
            $table->string('etat_service');
            $table->double('montant')->nullable;
            $table->double('frais_transport')->nullable;
            $table->double('montant_total')->nullable;
            $table->integer('id_personne')->unsigned();
            $table->foreign('id_personne')->references('id_personne')->on('personnes')->onDelete('cascade');
            $table->integer('id_agent')->nullable()->unsigned();
            $table->foreign('id_agent')->references('id_personne')->on('personnes')->onDelete('cascade');
            $table->integer('id_parcours')->nullable()->unsigned();
            $table->foreign('id_parcours')->references('id_parcours')->on('parcours')->onDelete('cascade');
             $table->integer('id_facture')->nullable()->unsigned();
            $table->foreign('id_facture')->references('id_facture')->on('factures')->onDelete('cascade');
            
        
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
         Schema::drop('services');
    }
}
