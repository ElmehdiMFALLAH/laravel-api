<?php
namespace App\Repositories\Post;


use App\Repositories\Post\PostInterface as PostInterface;
use Models\Post;
use DB;
use Illuminate\Http\Request;


class PostRepository implements PostInterface
{
    public $post;


    function __construct(Post $post) {
	$this->post = $post;
    }


    public function getAll()
    {
        return $this->post->getAll();
    }


    public function find($id)
    {
        return $this->post->findPost($id);
    }


    public function delete($id)
    {   
        DB::table('posts')->where('id', $id)->delete();
        return response()->json('The post was deleted');
    }

    public function postsUsingRepo(){
        $editeurs = Post::select('id','post','user_id')->get();
        return $editeurs->toJson();
    }

    public function searchByPost($p){

        $liste = Post::select()->where('id',$p)->get();
        return $liste->toJson();
    }

    public function addPost(Request $request){
        $post = Post::create($request->all());
        return response()->json($post, 201);
    }

        public function update(Request $request, $id , $texte)
    {
        DB::table('posts')
            ->where('id', $id)
            ->update(['post' => $texte]);
            return response()->json('Le post a ete modifie avec succes voila bihi',201);
    }

       

}