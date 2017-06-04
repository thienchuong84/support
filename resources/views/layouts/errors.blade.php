		@if( count($errors) > 0 )
			<div class="form-group row">
				<div class="offset-sm-3 col-sm-9" role="alert">
					<div class="alert alert-danger">
						@foreach( $errors->all() as $error)	
							<li style="list-style: none">{{ $error }}</li>
						@endforeach							
					</div>
				</div>
			</div>
		@endif