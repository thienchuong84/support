@extends('layouts.master')

@section('content')


	@if(count($users))		

		<table class="table">
		  <thead class="thead-default">
		    <tr>
		      <th>Name</th>
		      <th>Username</th>
		      <th>Email</th>
		      <th>Ext</th>
		      <th>Phone</th>
		      <th>Level</th>
		      <th>Is Active</th>
		      <th>Created At</th>
		      <th>Updated At</th>
		    </tr>
		  </thead>
		  <tbody>
			@foreach( $users as $user )
			    <tr>
			      <td><a href="/users/{{ $user->id }}">{{ $user->name }}</a></td>
			      <td>{{ $user->username }}</td>
			      <td>{{ $user->email }}</td>
			      <td>{{ $user->ext }}</td>
			      <td>{{ $user->phone }}</td>
			      <td>{{ $user->level }}</td>
			      <td>{{ $user->isActive }}</td>
			      <td>{{ $user->created_at->toFormattedDateString() }}</td>
			      <td>{{ $user->updated_at->toFormattedDateString() }}</th>
			    </tr>
		    @endforeach

		  </tbody>
		</table>

	@endif


@endsection