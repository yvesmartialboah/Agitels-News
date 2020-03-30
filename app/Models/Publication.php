<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = ['libelle', 'image', 'contenu', 'type_publication_id', 'auteur_id'];

    public function typePublication()
    {
        return $this->belongsTo('App\Models\typePublication');
    }

    public function Auteur()
    {
        return $this->belongsTo('App\Models\Auteur');
    }

    public function Commentpublication()
    {
       return $this->hasMany('App\Models\Commentpublication');
    }
}
