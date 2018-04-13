


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
            <p>by <i><a href="{{ route('users', ['user_id'=> $post->user_id])}}">{{ $post->user->name }}</a></i></p>
            <small>
              @foreach($post->tags as $tag)

                <a href="{{ route('posts-tag', ['tag'=> $tag])}}"> {{ $tag->name }} </a>

              @endforeach
            </small>
          @endforeach
      </ul>
    
      @endsection

