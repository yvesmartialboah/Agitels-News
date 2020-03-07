<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class typePublication extends Model
{
    protected $fillable = ['libelle'];

    public function Publication()
    {
       return $this->hasMany('App\Models\Publication');
    }
}
