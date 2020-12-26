<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class likes extends Model
{
    protected $fillable = ['user_id','likes_id','likee','likes_type',];

public function likes()
    {
        return $this->morphTo();
    }
public function user()
{
    return $this->belongsTo('App\User','user_id');
}
}
