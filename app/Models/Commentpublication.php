<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commentpublication extends Model
{
    protected $fillable = ['commentaire', 'publication_id', 'user_id'];

    public function publication()
    {
        return $this->belongsTo('App\Models\Publication');
    }

     public function user()
    {
        return $this->belongsTo('App\User');
    }

}
