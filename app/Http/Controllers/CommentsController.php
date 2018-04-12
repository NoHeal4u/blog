<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
class CommentsController extends Controller
{
    //
    public function store($postId)
    {
    	$post = Post::find($postId);

    	$this->validate(request(),['text'=>'required|min:15']);

    	$post->comments()->create(request()->all()); //laravel kaci id posta na id commenta

    	return redirect()->back();
    }
}
