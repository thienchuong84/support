@extends('layouts/master')

@section('content')

	{{-- <h3>Projects</h3> --}}

	<!-- thêm thẻ row tại đây sẽ làm bằng cột h3 trên -->

{{-- 	<div class="row">
		<div class="col-md-9">
			<hr>



			<form class="form-inline pull-right" method="POST" action="/projects">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="name" class="sr-only">Project Name</label>
					<input type="text" id="name" name="name" class="form-control" >
				</div>
				<button type="submit" class="btn btn-primary">Create</button>

				@if( count($errors) > 0 )
					@foreach( $errors->all() as $error)
						<p style="color:red; padding-top:0.5em">{{ $error }}</p>
					@endforeach
				@endif	
			</form>


		</div>
	</div>	 --}}

	<div class="row">
		<div class="col-sm-6">
			<blockquote class="blockquote">
				<h3 class="mb-0">Projects</h3>
				<footer class="blockquote-footer"><a href="/projects/new">New</a></footer>
			</blockquote>
			
		</div></p>
	</div>
	
	<div class="row">
		@if( count($projects) > 0 )
		<div class="col-sm-6">
 			<table class="table">
 				<thead class="thead-default">
 					<tr>
						<th>Name</th>
						<th>Created At</th>
						<th>Edit</th>
					</tr>
 				</thead>

 				<tbody>
 					@foreach( $projects as $project)
					<tr>
						<td><a href="/projects/{{ $project->id }}/show">{{ $project->name }}</a></td>
						<td>{{ $project->created_at }}</td>
						<td><a href="#" class="btn btn-primary" role="button">Edit</a></td>
					</tr>
 					@endforeach
 				</tbody>
 			</table>
		</div>
		@endif
	</div>

{{-- 
	<div class="row">
		<div class="col-md-9">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					@foreach($projects as $project)
						<tr>
							<td> {{ $project->name }} </td>
							<td><a href="/projects/edit/{{ $project->projectId }}" type="button" class="btn btn-primary">Edit</a></td>
							<td><button type="button" class="btn btn-danger">Delete</button></td>
						</tr>
					@endforeach			
				</tbody>
			</table>
		</div>
	</div> --}}

	



@endsection


