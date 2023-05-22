<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
     protected $primaryKey = 'id_description';
    protected $fillable = ['titre', 'contenu'];

    public function Document()
    {
        return $this->belongsTo('App\Document', 'id_document');

    }
}
