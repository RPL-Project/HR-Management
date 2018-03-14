@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-6 offset-3">
			<div class="card">
				<div class="card-body">
					{!! Form::open(['route' => 'employee.store', 'method' => 'POST']) !!}
						<div class="form-group">
							{{ Form::label('name', 'Employee Name') }}
							{{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Employee Name'])}}
						</div>
						<div class="form-group">
							{{ Form::label('gender', 'Employee Gender') }}
							{{ Form::select('gender', ['M' => 'Man', 'W' => 'Woman'], null, ['placeholder' => 'Select Gender', 'class' => 'custom-select'])}}
						</div>
						<div class="form-group">
							{{ Form::label('division', 'Employee Division`') }}
							{{ Form::select('division', ['M' => 'Man', 'W' => 'Woman'], null, ['placeholder' => 'Select Division', 'class' => 'custom-select'])}}
						</div>
						<div class="form-group">
							{{ Form::label('grade', 'Employee Grade') }}
							{{ Form::select('grade', ['M' => 'Man', 'W' => 'Woman'], null, ['placeholder' => 'Select Grade', 'class' => 'custom-select'])}}
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-2">
									<a onclick="history.go(-1)" class="btn btn-primary" style="font-color:white;">Back</a>
								</div>
								<div class="col-4 offset-6 text-right">
									{{ Form::submit('Add', ['class' => 'btn btn-primary']) }}
									{{ Form::reset('Reset', ['class' => 'btn btn-danger']) }}	
								</div>
							</div>					
						</div>
					{!! Form::close() !!}
				</div>
			</div>	
		</div>
	</div>	
@endsection