<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class typeInterview extends Model
{
    protected $fillable = ['libelle'];

    public function Interview()
    {
       return $this->hasMany('App\Models\Interview');
    }
}
