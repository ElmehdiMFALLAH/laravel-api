<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Models\Post;
use App\Repositories\Post\PostInterface as PostInterface;

 
class PostController extends Controller
{
    
    public function __construct(PostInterface $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        return Post::all();
    }
    
    public function postsUsingRepo(){
        $liste = $this->post->postsUsingRepo();
        return $liste;
    }

    public function searchByPost($p){
        return $this->post->searchByPost($p);
    }

    public function addPost(Request $request){
        return $this->post->addPost($request);
    }

    public function update(Request $request, $id, $texte){
        return $this->post->update($request, $id, $texte);
    }

    public function delete($id){
        return $this->post->delete($id);
    }
 
}
