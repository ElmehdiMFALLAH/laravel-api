<?php
namespace Models;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
   protected $table = 'posts';
   protected $fillable = ['post' , 'user_id'];
   public $timestamps = false;

   public function comments()
   {
       $this->hasMany('\Models\Comment','post_id','id');
   }
   public function user()
   {
       $this->belongsTo('\Models\User','user_id','id');
   }
}