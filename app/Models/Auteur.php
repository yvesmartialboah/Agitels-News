<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    protected $fillable = ['nom', 'prenom', 'contact', 'email', 'filiere', 'fonction'];

    // public function Publication()
    // {
    //     return $this->hasMany('App\Publication');
    // }

    // public function Interview()
    // {
    //     return $this->hasMany('App\Interview');
    // }
}
