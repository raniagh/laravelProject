<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    protected $primaryKey = 'id_contrat';
    protected $fillable = ['date'];
}
