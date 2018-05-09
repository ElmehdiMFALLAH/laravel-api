<?php
 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Models\User;
use Models\Post;
use Response;
use App\Repositories\User\UserInterface as UserInterface;

 
class UserController extends Controller
{
    protected $hidden = ['password'];
    
    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return User::all();
    }

    public function userSerializer(){
        //$user = DB::table('users')->where('email', 'elmehdi@gmail.com')->first();
        $user = User::all();
        return $user->toJson();
    }

    public function show(User $user)
    {
        return $user;
    }

    public function userPosts(User $user){     
        return $this->user->userPosts($user);
    }

    public function userComments(User $user){
    	return $this->user->userComments($user);
    }

}
