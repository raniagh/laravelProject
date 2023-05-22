<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DocumentPesonne extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('document_personne', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('id_document')->unsigned();
            $table->integer('id_personne')->unsigned();

            $table->foreign('id_document')->references('id_document')->on('documents')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
 
            $table->foreign('id_personne')->references('id_personne')->on('personnes')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('document_personne', function(Blueprint $table) {
            $table->dropForeign('document_personne_id_document_foreign');
            $table->dropForeign('document_personne_id_personne_foreign');
        });
 
        Schema::drop('document_personne');
    }
   
}
