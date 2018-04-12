@extends('layouts.master')

@section('title')
	Register
@endsection


@section('content')
	<h2>Login: </h2>
	

	<form method="POST" action="/login">
		{{csrf_field()}}
		
			<div class="form-group">
			<label for="email"> Email </label>
			<input id="email" type="text" name="email" class="form-control">
			@include('layouts.partials.error-message',['fieldTitle'=>'email']) 
		</div>
		
			<div class="form-group">
			<label for="password"> Password </label>
			<input id="password" type="password" name="password" class="form-control">
			@include('layouts.partials.error-message',['fieldTitle'=>'password']) 
		</div>
		

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Submit</button>
			
		</div>
	</form>


	 @if (count($errors->all()) > 0)

        @foreach($errors->all() as $error)
            <div class="form-group">
                <div class="alert alert-danger">
                    <li>{{ $error }}</li>
                </div>
            </div>
        @endforeach

    @endif
    
@endsection