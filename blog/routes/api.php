<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('products', 'ProductsController@index');
 
Route::get('products/{product}', 'ProductsController@show');
 
Route::post('products','ProductsController@store');
 
Route::put('products/{product}','ProductsController@update');
 
Route::delete('products/{product}', 'ProductsController@delete');

Route::get('posts', 'PostController@serializer');

Route::get('comments', 'CommentController@commentSerializer');

Route::get('users', 'UserController@userSerializer');

Route::get('users/{user}', 'UserController@show');

Route::get('users/posts/{user}' , 'UserController@userPosts');

Route::get('users/comments/{user}' , 'UserController@userComments');

Route::get('posts/posts' , 'PostController@postsUsingRepo');

Route::get('posts/{post}' , 'PostController@searchByPost');

Route::post('posts/add','PostController@addPost');

Route::put('updatepost/{post}/{texte}','PostController@update');

Route::delete('deletepost/{post}', 'PostController@delete');

