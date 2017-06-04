@extends('layouts.master')

@section('content')

<!--     <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">Create New Team</h1>
        <p class="lead blog-description">An example blog template built with Bootstrap.</p> 
      </div>
    </div> -->

	<div class="row">
		<div class="col-sm-6">
			<blockquote class="blockquote">
				<h3 class="mb-0">New Team</h3>
			</blockquote>
		</div>
	</div>

    <div class="row">
    	<div class="col-sm-6">
    		
			<form method="POST" action="/teams/new">
				{{ csrf_field() }}				
				<div class="form-group row">
					<label class="col-sm-3 col-form-label" for="name">Name:</label>
					<div class="col-sm-9">
						<input class="form-control" type="text" id="name" name="name" ></input>
					</div>
				</div>
				
				@if( count($projects) > 0 )

				<div class="form-group row">
					<label for="project_id" class="col-sm-3 col-form-label">Projects</label>
					<div class="col-sm-9">
						<select class="form-control" id="project_id" name="project_id">
							<option value="">None</option>
							@foreach( $projects as $project )
							<option value="{{ $project->id }}">{{ $project->name }}</option>
							@endforeach
						</select>						
					</div>
				</div>

				@endif				

				<div class="form-group row">
					<div class="offset-sm-3 col-sm-9">
						<button class="btn btn-primary" type="submit">Create</button>	
					</div>
				</div>

				@include('layouts.errors')
			</form>

    	</div>


	   	@if( count($teams) > 0 )
    	<div class="col-sm-6"> 
			<table class="table">
				<thead class="thead-default">
					<tr>
						<th>Name</th>
						<th>Created At</th>
					</tr>
				</thead>
				<tbody>
	 				@foreach($teams as $team)
	 					<tr>
	 						<td><a href="">{{ $team->name }}</a></td>
	 						<td>{{ $team->created_at->toFormattedDateString() }}</td>
	 					</tr>
	 				@endforeach						
				</tbody>
			</table>
    	</div>
		@endif

    </div>

@endsection