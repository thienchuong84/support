				@if( count($errors) > 0 )
					@foreach( $errors->all() as $error)
						<p style="color:red; padding-top:0.5em">{{ $error }}</p>
					@endforeach
				@endif	