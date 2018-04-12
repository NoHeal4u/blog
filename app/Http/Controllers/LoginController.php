<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function __construct()
    	{
    		$this->middleware('guest',['except' => 'logout']);
    	}

    public function logout()
    {
    	

    	auth()->logout();

    	return redirect('/posts');
    }

    public function create()
    {
    	return view('login.create');
    }

    public function store()
    {
    	if(!Auth()->attempt(
    		request(['email', 'password'])
    		)){
    		return back()->withErrors([
    			'message'=>'Bad credentials'
    			]);
    	}
    return redirect('/posts');
    }
}
