<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $fillable = ['location','about','sta1','sta2','user_id'];

    public function user()
        {
            return $this->belongsTo('App\User');
        }
}
