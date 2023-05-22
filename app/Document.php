<?php

namespace App;

use App\Description;
use App\Personne;


use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
   protected $primaryKey='id_document';
    protected $fillable=[
        'titre',
        'date_publication',
        'nom_fichier',
        'nom_video',
        'avatar'
    ];
    public function Description()
    {
        return $this->hasMany('App\Description', 'id_description');

    }
     public function Commentaire()
    {
        return $this->hasMany('App\Commentaire', 'id_commentaire');

    }

    public function personnes()
    {
        return $this->belongsToMany(\App\Personne::class);
    } 

}
