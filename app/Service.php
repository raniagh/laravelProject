<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $primaryKey = 'id_service';
    protected $fillable = ['designation_service','point_depart','point_arrive','date_echeance','type','etat_service', 'poids'];

    public function Personne()
    {
        return $this->belongsTo('App\Personne', 'id_personne');

    }
   public function Parcour()
    {
        return $this->belongsTo('App\Parcour', 'id_parcours');

    }
public function Facture()
    {
        return $this->belongsTo('App\Facture', 'id_facture');

    }

}
