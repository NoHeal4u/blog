<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use\App\Http\PostsController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', 'PostsController@index' 
	// $posts = Post::getPublished();

 //    return view('posts.index', compact(['posts']));
)->name('all-posts');

// Route::get('/post/create', ['as' => 'create-post', 'uses' => PostsController@create']); //koristi se kada rute postanu komplikovane

Route::get('/post/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::post('/posts/{post_id}/comments', 'CommentsController@store')->name('comments-post');

Route::get('/posts/{id}', 'PostsController@show' 
	// $post = Post::find($id);

 //    return view('posts.show', compact(['post']));
)->name('single-post');

Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');
Route::get('/logout','LoginController@logout');
Route::get('/login','LoginController@create')->name('login');
Route::post('/login','LoginController@store');
Route::get('/users/{id}', 'UsersController@show')->name('users');
Route::get('/posts/tag/{tag}', 'TagsController@index')->name('posts-tag');



