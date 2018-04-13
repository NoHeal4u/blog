<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
use Illuminate\Support\Facades\Mail;
use App\Mail\CommentReceived;

class CommentsController extends Controller
{
    //
    public function store($postId)
    {
    	$post = Post::find($postId);

    	$this->validate(request(),['text'=>'required|min:15']);

    	$post->comments()->create(request()->all()); //laravel kaci id posta na id commenta

    	Mail::to($post->user)->send(new CommentReceived($post));

    	return redirect()->back();


    }
}
