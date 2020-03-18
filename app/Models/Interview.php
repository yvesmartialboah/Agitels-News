<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
   protected $fillable = ['libelle', 'statut', 'description', 'audio_url', 'video_url', 'type_interview_id', 'auteur_id'];

   public function typeInterview()
    {
        return $this->belongsTo('App\Models\typeInterview');
    }

    public function Auteur()
    {
        return $this->belongsTo('App\Models\Auteur');
    }
}
