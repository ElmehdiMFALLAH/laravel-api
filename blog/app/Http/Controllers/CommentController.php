<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Models\Comment;
 
class CommentController extends Controller
{
 
    public function index()
    {
        return Comment::all();
    }

    public function commentSerializer(){
        $comment = Comment::find(1);
        return $comment->toJson();
    }

}