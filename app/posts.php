<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    
  protected $fillable = ['user_id','post_id','content','status',];

  public function user()
        {
            return $this->belongsTo('App\User');
        }
  
        public function scopeNotReply($query)
        {
          return $query->whereNull('post_id');
        }
        public function replies()
        {
          return $this->hasMany('App\posts','post_id');
        }
        public function likes()
        {
          return $this->morphMany('App\likes','likes');
        }
}
