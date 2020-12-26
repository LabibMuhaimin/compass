<?php

namespace App;

use App\Traits\Friendable;
use App\posts;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    
    use Friendable;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','slug','gender','avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile()
        {
            return $this->hasOne('App\Profile');
        }
  public function posts()
        {
            return $this->hasMany('App\posts');
        }
        
        public function likes()
        {
            return $this->hasMany('App\likes','user_id');
        }
        public function friendsOfMine()
        {
            return $this->belongsToMany('App\User','friendships','requester','user_requested');
        }
        public function friendsOf()
        {
            return $this->belongsToMany('App\User','friendships','user_requested','requester');
        }
        public function friends(){
            return $this->friendsOfMine()->wherePivot('status',1)->get()->merge($this->friendsOf()->wherePivot('status',1)->get());
        }
        public function isFriendWith(User $user){
            return (bool) $this->friends()->where('id',$user->id)->count();
        }
        public function hasLikedStatus(posts $posts)
        {
            return (bool) $posts->likes->where('likes_id',$posts->id)->where('likes_type',get_class($posts))->where('user_id',$this->id)->count();
        }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
}
