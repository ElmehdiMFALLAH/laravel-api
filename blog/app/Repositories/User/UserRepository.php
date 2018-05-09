<?php
namespace App\Repositories\User;


use App\Repositories\User\UserInterface as UserInterface;
use Models\User;
use Response;


class UserRepository implements UserInterface
{
    public $user;


    function __construct(User $user) {
	$this->user = $user;
    }


    public function getAll()
    {
        return $this->user->getAll();
    }


    public function find($id)
    {
        return $this->user->findUser($id);
    }


    public function delete($id)
    {
        return $this->user->deleteUser($id);
    }

    public function userPosts(User $user){    
        return Response::json(User::with('posts')->get()->find($user));
    }

    public function userComments(User $user){    
        return Response::json(User::with('comments')->get()->find($user));
    }

}