<?php
namespace Models;
use Illuminate\Database\Eloquent\Model;
class Comment extends Model
{
   protected $table = 'comments';
   public function post()
   {
       $this->belongsTo('\Models\Post','post_id','id');
   }
}