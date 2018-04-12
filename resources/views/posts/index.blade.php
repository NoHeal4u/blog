


      @extends('layouts.master')

      @section('title')
        Blog
      @endsection


      @section('content')
      
        <ul>
          @foreach($posts as $post)
            <li>
                <a href="{{route('single-post',['id'=> $post->id])}}">{{$post->title}}</a>
            </li>
            <p>by <i><a href="">{{ $post->user->name }}</a></i></p>
          @endforeach
      </ul>
    
      @endsection

