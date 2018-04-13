

      @extends('layouts.master')

      @section('title')
       User
      @endsection


      @section('content')
        <h2> {{ $user->name }} </h2>
        <div class="pull-left" >
          <a href="/posts">Back to posts</a>
        </div>
      
        <ul>
          @foreach($user->posts as $post)
            <li>
                <a href="{{route('single-post',['id'=> $post->id])}}">{{$post->title}}</a>
            </li>
            <p>by <i><a href="">{{ $post->user->name }}</a></i></p>
          @endforeach
      </ul>
    
      @endsection

