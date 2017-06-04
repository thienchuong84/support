@extends('layouts.master')

@section('content')

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
						<td>{{ $project->created_at->toFormattedDateString() }}</td>
						<td><a href="#" class="btn btn-primary" role="button">Edit</a></td>
					</tr>
 					@endforeach
 				</tbody>
 			</table>
		</div>
		@endif

		@if( count($teams) > 0 )
		<div class="col-sm-6">
 			<table class="table">
 				<thead class="thead-default">
 					<tr>
						<th>Name</th>
						<th>Created At</th>
						{{-- <th>Edit</th> --}}
					</tr>
 				</thead>

 				<tbody>
 					@foreach( $teams as $team)
					<tr>
						<td><a href="#">{{ $team->name }}</a></td>
						<td>{{ $team->created_at->toFormattedDateString() }}</td>
						{{-- <td><a href="#" class="btn btn-primary" role="button">Edit</a></td> --}}
					</tr>
 					@endforeach
 				</tbody>
 			</table>
		</div>
		@endif		
	</div>	



@endsection