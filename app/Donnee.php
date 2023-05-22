<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donnee extends Model
{
     protected $primaryKey='id_donne';
    protected $fillable=['count','id_personne','id_service'
       
    ];
}
