<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;

class PostsController extends Controller
{   

    public function __consturct()
    {
        $this->middleware('auth',['only' => ['create', 'store']]);
    }
    public function index()
    {   
        // dd(auth()->user());
    	// $posts = Post::getPublished();
        $posts = Post::all();

    	return view('posts.index', compact(['posts']));
    }

    public function show($id)
    {
    	// $post = Post::find($id);
        $post = Post::with('comments')->find($id);
        // $post= Post::find($id); problem performance vise upita
        // dd($post->comments);

    	return view('posts.show', compact(['post']));
    }


    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
         //dd(\request()->all()); //vraca sve inpute
        // dd(\request()->get('title')); vraca samo jedan

        // $post = new Post();
        // $post->title =(request()->get('title'));
        // $post->body =(request()->get('body'));
        // $post->is_published =(request()->get('is_published'));

        // $post->save(); //kucanje u jednu
        $this->validate(request(),['title'=>'required',
                                    'body'=>'required|min:15']); //validacija za korektan unos
       
        // Post::create(request()->all());

        $post = new Post();
        $post->title = request('title');
        $post->body = request('body');
        $post->user_id = auth()->user()->id;
        $post->is_published = request('is_published');
        $post->save();

        return redirect('/posts');
    }

}

