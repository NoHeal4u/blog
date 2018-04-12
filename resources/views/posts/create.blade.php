@extends('layouts.master')

@section('title')
	Create new post
@endsection


@section('content')
	<h2>Create new post</h2>
	

	<form method="POST" action="/posts">
	{{csrf_field()}}
		<div class="form-group">
			<label for="title"> Ovo je naslov </label>
			<input id="title" type="text" name="title" class="form-control">
			@include('layouts.partials.error-message',['fieldTitle'=>'title']) 
		</div>
		<div class="form-group">

			<label for="body">Ovo je body</label>
			<textarea id="body" class="form-control" name="body"></textarea>
			@include('layouts.partials.error-message',['fieldTitle'=>'body'])
		</div>

		<div class="form-group">
			<label for="is_published">Objavi</label>
			<input type="checkbox" name="is_published" class="form-control" id="is_published" value="1" checked="">
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Submit</button>
			
		</div>
	</form>
@endsection