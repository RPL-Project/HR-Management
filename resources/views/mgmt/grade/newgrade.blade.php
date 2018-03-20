@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-6 offset-3">
			<div class="card">
				<div class="card-body">
					{!! Form::open(['route' => 'grade.store', 'method' => 'POST']) !!}
						<!-- <div class="form-group">
							{{ Form::label('grade', 'Grade Name') }}
							{{ Form::text('grade', '', ['class' => 'form-control', 'placeholder' => 'Grade Name'])}}
						</div> -->
						<div class="form-group row">
							<label for="grade_name" class="col-md-4 col-form-label text-md-right">Grade Name &nbsp;:</label>
                            <div class="col-md-6">
                                <input id="grade_name" type="text" class="form-control{{ $errors->has('Grade Name') ? ' is-invalid' : '' }}" name="grade_name" value="{{old('$grade->grade_name')}}" placeholder="Grade Name" required autofocus>

                                @if ($errors->has('division_status'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('division_status') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						<div class="form-group row">
							<label for="division_description" class="col-md-4 col-form-label text-md-right">Description &nbsp;:</label>
                            <div class="col-md-6">
                                <textarea id="division_description" type="text" class="form-control{{ $errors->has('division_description') ? ' is-invalid' : '' }}" name="division_description" value="{{old('$division->division_description')}}" placeholder="Description"  > </textarea>
                             

                                @if ($errors->has('division_description'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('division_description') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						<div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
									<a onclick="history.go(-1)" class="btn btn-primary" style="color:#fff;">Back</a>
                                <button type="submit" class="btn btn-success" onclick="submitForm(this);">
                                    Add
                                </button>
                            </div>
                        </div>
					{!! Form::close() !!}
				</div>
			</div>	
		</div>
	</div>	
@endsection