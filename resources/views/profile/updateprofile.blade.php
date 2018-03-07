@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-6 offset-3">
			<div class="card">
				<div class="card-body">
					<form method="POST" action="{{ route('profile.update', $user->id) }}">
                        {{csrf_field()}}
                        {{method_field('PATCH') }}

                        <div class="form-group row">
                            <label for="employee_id" class="col-md-4 col-form-label text-md-right">Employee id</label>

                            <div class="col-md-6">
                                <input id="employee_id" type="text" class="form-control{{ $errors->has('employee_id') ? ' is-invalid' : '' }}" name="employee_id" value="{{Auth::user()->employee_id}}" required autofocus>

                                @if ($errors->has('employee_id'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('employee_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{Auth::user()->name}}" required>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>

                            <div class="col-md-6">
                                <select id="gender" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="{{ old('gender') }}" placeholder="Select gender" required>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>

                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{Auth::user()->email}}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Division</label>
                            <div class="col-md-6">
                                <select name="division_id" class="form-control{{ $errors->has('division_id') ? ' is-invalid' : '' }}">
                                @foreach ($divisions as $division)
                                    <option value="{{ $division->id }}" >{{ $division->division_status}} </option>
                                @endforeach
                                </select>
                                @if ($errors->has('division_id'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('division_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="grade" class="col-md-4 col-form-label text-md-right">Grade</label>
                            <div class="col-md-6">
                                <select name="grade_id" class="form-control{{ $errors->has('grade_id') ? ' is-invalid' : '' }}">
                                @foreach ($grades as $grade)
                                    <option value="{{ $grade->id }}" > {{ $grade->grade_status}} </option>
                                @endforeach
                                </select>
                                @if ($errors->has('grade_id'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('grade_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
									<a onclick="history.go(-1)" class="btn btn-primary" style="color:#fff;">Back</a>
                                <button type="submit" class="btn btn-success">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
					<!--{!! Form::open(['route' => ['profile.update', $user->id], 'method' => 'PUT']) !!}
						<div class="form-group">
							{{ Form::label('employee_id', 'Employe id') }}
							{{ Form::text('employee_id', $user->employee_id, ['class' => 'form-control', 'placeholder' => 'Employe id'])}}
						</div>
						<div class="form-group">
							{{ Form::label('name', 'Name') }}
							{{ Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
						</div>
						<div class="form-group">
							{{ Form::label('gender', 'Employee Gender') }}
							{{ Form::select('gender', ['Man' => 'Man', 'Woman' => 'Woman'], null, ['placeholder' => 'Select Gender', 'class' => 'custom-select'])}}
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
					{!! Form::close() !!}-->
				</div>
			</div>	
		</div>
	</div>	
@endsection