<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcour extends Model
{
    protected $primaryKey='id_parcours';
    protected $fillable=[
        'date_echeance'
    ];
    public function Service()
    {
        return $this->hasMany('App\Service', 'id_service');

    }
     public function Personne()
    {
        return $this->belongsTo('App\Personne', 'id_personne');

    }
}
