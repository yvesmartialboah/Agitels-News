<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommentInterview extends Model
{
    protected $fillable = ['commentaire', 'interview_id', 'user_id'];

    public function interview()
    {
        return $this->belongsTo('App\Models\Interview');
    }

     public function user()
    {
        return $this->belongsTo('App\User');
    }
}
