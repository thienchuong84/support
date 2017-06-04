@extends('layouts.master')

@section('content')

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">Register</h1>
        {{-- <p class="lead blog-description">An example blog template built with Bootstrap.</p> --}}
      </div>
    </div>

	<form method="POST" action="/register">
		{{ csrf_field() }}

		<div class="form-group row">
			<label for="name" class="col-sm-3 col-form-label">Name:</label>
			<div class="col-sm-9">
				<input type="text" id="name" name="name" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label for="username" class="col-sm-3 col-form-label">Username:</label>
			<div class="col-sm-9">
				<input type="text" id="username" name="username" class="form-control">
			</div>
		</div>		

		<div class="form-group row">
			<label for="email" class="col-sm-3 col-form-label">Email:</label>
			<div class="col-sm-9">
				<input type="email" id="email" name="email" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label for="ext" class="col-sm-3 col-form-label">Ext:</label>
			<div class="col-sm-9">
				<input type="text" id="ext" name="ext" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label for="phone" class="col-sm-3 col-form-label">Phone:</label>
			<div class="col-sm-9">
				<input type="text" id="phone" name="phone" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label for="password" class="col-sm-3 col-form-label">Password:</label>
			<div class="col-sm-9">
				<input type="password" id="password" name="password" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<label for="password_confirmation" class="col-sm-3 col-form-label">Password Confirm:</label>
			<div class="col-sm-9">
				<input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<div class="offset-sm-3 col-sm-9">
				<button type="submit" class="btn btn-primary">Register</button>
			</div>
		</div>

		@include('layouts.errors')

	</form>

@endsection