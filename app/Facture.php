<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $primaryKey = 'id_facture';
    protected $fillable = ['date'];

   public function Service()
    {
        return $this->hasMany('App\Service', 'id_service');

    }
}
