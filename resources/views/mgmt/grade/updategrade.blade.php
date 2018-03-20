@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-6 offset-3">
			<div class="card">
				<div class="card-body">
					{!! Form::open(['route' => ['grade.update', $grade->id], 'method' => 'PUT']) !!}
						<div class="form-group">
							{{ Form::label('grade', 'Grade Name') }}
							{{ Form::text('grade', $grade->grade_status, ['class' => 'form-control', 'placeholder' => 'Division Name'])}}
						</div>
						<div class="form-group">
							{{ Form::label('description', 'Description') }}
							{{ Form::textarea('description', $grade->grade_description, ['class' => 'form-control', 'placeholder' => 'Description'])}}
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-2">
									<a onclick="history.go(-1)" class="btn btn-primary" style="color:white;">Back</a>
								</div>
								<div class="col-4 offset-6 text-right">
									{{ Form::submit('Save', ['class' => 'btn btn-success']) }}
								</div>
							</div>					
						</div>
					{!! Form::close() !!}
				</div>
			</div>	
		</div>
	</div>	
@endsection