@extends('layouts.app')

@section('content')
	<div id="wrapper">
		<div class="container">
			<h2 class="text-center"><strong>Profile</strong></h2>
				<hr>
				<br>

			<div class="row">
					<div class="col-6 offset-3">
						<div class="card" style="width: 32rem;">
							<div class="card-body">
								<div class="form-group row">
		                            <label for="employee_id" class="col-md-6 col-form-label text-md-right bold">Employee id</label>
		                            <div class="col-6">
		                                 <label for="employee_id" class="col-md-10 col-form-label">{{Auth::user()->employee_id}}</label>
		                            </div>
		                        </div>
		                        <div class="form-group row">
		                            <label for="employee_id" class="col-md-6 col-form-label text-md-right bold ">Name</label>
		                            <div class="col-6">
		                                 <label for="employee_id" class="col-md-10 col-form-label ">{{Auth::user()->name}}</label>
		                            </div>
		                        </div>
		                        <div class="form-group row">
		                            <label for="employee_id" class="col-md-6 col-form-label text-md-right bold ">Gender</label>
		                            <div class="col-6">
		                                 <label for="employee_id" class="col-md-10 col-form-label ">{{Auth::user()->gender}}</label>
		                            </div>
		                        </div>
		                        <div class="form-group row">
		                            <label for="employee_id" class="col-md-6 col-form-label text-md-right bold ">Email</label>
		                            <div class="col-6">
		                                 <label for="employee_id" class="col-md-10 col-form-label ">{{Auth::user()->email}}</label>
		                            </div>
		                        </div>
		                        <div class="form-group row">
		                            <label for="employee_id" class="col-md-6 col-form-label text-md-right bold ">Division</label>
		                            <div class="col-6">
		                                 <label for="employee_id" class="col-md-10 col-form-label ">
		                                 @foreach($users as $division)
		                                 	{{$division->division_status}}
		                                 @endforeach</label>
		                            </div>
		                        </div>
		                         <div class="form-group row">
		                            <label for="employee_id" class="col-md-6 col-form-label text-md-right bold ">Grade</label>
		                            <div class="col-6">
		                                <label for="employee_id" class="col-md-10 col-form-label ">
		                                 @foreach($users as $grade)
										{{$grade->grade_status}}
										@endforeach</label>
		                            </div>
		                        </div>
								<center>
									{!! Form::open(['route' => ['profile.edit', Auth::user()->id], 'method' => 'GET']) !!}
									{{csrf_field()}}
									{{ Form::submit('Edit Profile', ['class' => 'btn btn-success']) }}
									{!! Form::close() !!}
								</center>
							</div>
						</div>
					</div>
		</div>
	</div>
@endsection