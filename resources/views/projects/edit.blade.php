@extends('layouts/master')

@section('content')

	{{-- <h3>Edit</h3> --}}

{{-- 	<div class="row-">
		<div class="col"><hr></div>
	</div> --}}
	
	<div class="row">
		<div class="col-md-9">
			<form method="POST" action="/projects/update" class="form-inline">
				{{ csrf_field() }}
				<div class="form-group">
					<label class="form-control sr-only" for="name"></label>
					<input type="hidden" id="projectId" name="projectId" value="{{ $project->projectId }}">
					<input type="text" id='name' name="name" value="{{ $project->name }}" class="form-control" >
					<button type="submit" class="btn btn-primary" >Update</button>
				</div>

				@include('dashboard/error')
			</form>
		</div>
	</div>
@endsection