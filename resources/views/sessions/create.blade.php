@extends('layouts.master')

@section('content')

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">Login</h1>
        {{-- <p class="lead blog-description">An example blog template built with Bootstrap.</p> --}}
      </div>
    </div>

	<div class="row">
		<div class="offset-sm-3 col-sm-6">
			<form method="POST" action="/login">
				{{ csrf_field() }}
				<div class="form-group row">
					<label for="username" class="col-sm-3 col-form-label">Username:</label>
					<div class="col-sm-9">
						<input type="text" id="username" name="username" class="form-control">
					</div>
				</div>

				<div class="form-group row">
					<label for="password" class="col-sm-3 col-form-label">Password:</label>
					<div class="col-sm-9">
						<input type="password" id="password" name="password" class="form-control">
					</div>
				</div>		

				<div class="form-group row">
					<div class="offset-sm-3 col-sm-9">
						<button class="btn btn-primary" type="submit">Login</button>
					</div>
				</div>	

				@if( count($errors) > 0 )		
					<div class="form-group row">
						<div class="offset-sm-3 col-sm-9">
							<ul class="alert alert-danger">
								@foreach( $errors->all() as $error )
									<li style="list-style: none">{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					</div>
				@endif
			</form>			
		</div>
	</div>






@endsection