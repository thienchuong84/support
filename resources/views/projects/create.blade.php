@extends('layouts.master')

@section('content')

	<blockquote class="blockquote">
		<h3 class="mb-0">New Project</h3>
		<footer class="blockquote-footer"><a href="/projects">Lists</a></footer>
	</blockquote>

	<div class="row">
		<div class="col-sm-6">
			<form class="form-inline pull-right" method="POST" action="/projects">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="name" class="sr-only">Project Name</label>
					<input type="text" id="name" name="name" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="Name's Project" >
				</div>
				<button type="submit" class="btn btn-primary">Create</button>

				@if( count($errors) > 0 )
					@foreach( $errors->all() as $error)
						<p style="color:red; padding-top:0.5em">{{ $error }}</p>
					@endforeach
				@endif	
			</form>			
		</div>
	</div>
@endsection