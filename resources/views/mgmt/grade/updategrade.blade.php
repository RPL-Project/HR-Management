@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-6 offset-3">
			<div class="card">
				<div class="card-body">
					<form method="POST" action="{{ route('grade.update', $grade->id) }}">
                        {{csrf_field()}}
                        {{method_field('PATCH') }}
                        <div class="form-group row">
							<label for="grade_status" class="col-md-4 col-form-label text-md-right">Grade</label>
                            <div class="col-md-6">
                                <input id="grade_status" type="text" class="form-control{{ $errors->has('grade_status') ? ' is-invalid' : '' }}" name="grade_status" value="{{($grade->grade_status)}}" required autofocus>

                                @if ($errors->has('grade_status'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('grade_status') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						<div class="form-group row">
							<label for="grade_description" class="col-md-4 col-form-label text-md-right">Description</label>
                            <div class="col-md-6">
                                <textarea id="grade_description" type="text" class="form-control{{ $errors->has('grade_description') ? ' is-invalid' : '' }}" name="grade_description"required>{{($grade->grade_description)}}</textarea><p style="font-size:12px; font-color:gray;"> Text only can input 200 Character</p>


                                @if ($errors->has('grade_description'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('grade_description') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
                        <div class="form-group row">
                            <label for="grade_salary" class="col-md-4 col-form-label text-md-right">Salary</label>
                            <div class="col-md-6">
                                <input id="grade_salary" type="text" class="form-control{{ $errors->has('grade_salary') ? ' is-invalid' : '' }}" name="grade_salary" value="{{($grade->grade_salary)}}" required autofocus>

                                @if ($errors->has('grade_salary'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('grade_salary') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @if(Auth::user()->role_id == 1)
                            <div class="form-group row">
                                <label for="status" class="col-md-4 col-form-label text-md-right">Status
                                </label>
                                <div class="col-md-6">
                                    <select id="status" type="text" class="form-control" name="status">
                                        <option>Accept</option>
                                        <option>Reject</option>
                                    </select>
                                </div>
                            </div>
                        @elseif(Auth::user()->role_id == 2)
                            <div>
                                <input type="hidden" id="status" name="status" value="pending">
                            </div>
                        @endif
						<div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
									<a onclick="history.go(-1)" class="btn btn-primary" style="color:#fff;">Back</a>
                                <button type="submit" class="btn btn-success">
                                    Save
                                </button>
                            </div>
                        </div>
					</form>
				</div>
			</div>	
		</div>
	</div>	
@endsection