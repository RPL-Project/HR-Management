@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-6 offset-3">
			<div class="card">
				<div class="card-body">
					{!! Form::open(['route' => 'employee.store', 'method' => 'POST']) !!}
						<div class="form-group">
							{{ Form::label('employee_id', 'Employee Id') }}
							{{ Form::text('employee_id', '', ['class' => 'form-control', 'placeholder' => 'Employee Id'])}}
						</div>
						<div class="form-group">
							{{ Form::label('name', 'Employee Name') }}
							{{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Employee Name'])}}
						</div>
						<div class="form-group">
							{{ Form::label('gender', 'Employee Gender') }}
							{{ Form::select('gender', ['M' => 'Man', 'W' => 'Woman'], null, ['placeholder' => 'Select Gender', 'class' => 'custom-select'])}}
						</div>
						<div class="form-group">
							{{ Form::label('email', 'Employee Email') }}
							{{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Employee Email'])}}
						</div>
						<div class="form-group">
							{{ Form::label('division_id', 'Employee Division`') }}
							{{ Form::select('division_id', ['S1' => 'Sample1', 'S2' => 'Sample2'], null, ['placeholder' => 'Select Division', 'class' => 'custom-select'])}}
						</div>
						<div class="form-group">
							{{ Form::label('grade_id', 'Employee Grade') }}
							{{ Form::select('grade_id', ['S1' => 'Sample1', 'S2' => 'Sample2'], null, ['placeholder' => 'Select Grade', 'class' => 'custom-select'])}}
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-2">
									<a onclick="history.go(-1)" class="btn btn-primary">Back</a>
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