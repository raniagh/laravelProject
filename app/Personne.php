<?php

namespace App;
use App\Document;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    protected $primaryKey = 'id_personne';
    protected $fillable = ['nom','prenom','cin','Num_tel','adresse','ville','region','role','etat','agen','niveau','email', 'password'];

    public function Service()
    {
        return $this->belongsToMany(\App\Service::class);
    }
   public function documents()
    {
        return $this->belongsToMany(\App\Document::class);
    } 

}
