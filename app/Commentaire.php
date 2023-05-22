<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
     protected $primaryKey = 'id_commentaire';
    protected $fillable = ['contenu'];

    public function Document()
    {
        return $this->belongsTo('App\Document', 'id_document');

    } 
    


}
