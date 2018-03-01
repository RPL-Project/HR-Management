@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-6 offset-3">
			<div class="card">
				<div class="card-body">
					{!! Form::open(['route' => ['profile.update', $user->id], 'method' => 'PUT']) !!}
						<div class="form-group">
							{{ Form::label('name', 'Name') }}
							{{ Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
						</div>
						<div class="form-group">
							{{ Form::label('email', 'Email') }}
							{{ Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Email'])}}
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-2">
									<a onclick="history.go(-1)" class="btn btn-primary">Back</a>
								</div>
								<div class="col-4 offset-6 text-right">
									{{ Form::submit('Save Changes', ['class' => 'btn btn-success']) }}
								</div>
							</div>					
						</div>
					{!! Form::close() !!}
				</div>
			</div>	
		</div>
	</div>	
@endsection