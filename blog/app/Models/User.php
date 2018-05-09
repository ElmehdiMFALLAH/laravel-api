<?php
namespace Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model
{   /**
     * The attributes that should be visible in arrays.
     *
     * @var array
     */
   protected $hidden = ['password','id'];
   protected $table = 'users';
   public function posts()
   {      
       return $this->hasMany('\Models\Post','user_id','id');
   }
   public function comments()
   {
       return $this->hasManyThrough('\Models\Comment','\Models\Post','user_id','post_id')->select(array('comment'));
   }
}