@extends('layouts.app')
<script type="text/javascript">
	function submitForm(btn){
		btn.disabled = true;
		btn.form.submit();
	}
</script>
@section('content')
	<div class="row">
		<div class="col-6 offset-3">
			<div class="card">
				<div class="card-body">
					{!! Form::open(['route' => 'grade.store', 'method' => 'POST']) !!}
						<div class="form-group row">
							<label for="garde_status" class="col-md-4 col-form-label text-md-right">Grade</label>
                            <div class="col-md-6">
                                <input id="garde_status" type="text" class="form-control{{ $errors->has('garde_status') ? ' is-invalid' : '' }}" name="garde_status" value="{{old('$grade->garde_status')}}" required autofocus>

                                @if ($errors->has('garde_status'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('garde_status') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						<div class="form-group row">
							<label for="grade_description" class="col-md-4 col-form-label text-md-right">Description</label>
                            <div class="col-md-6">
                                <textarea id="grade_description" type="text" class="form-control{{ $errors->has('grade_description') ? ' is-invalid' : '' }}" name="grade_description" value="{{old('$grade->grade_description')}}" required > </textarea>
                             

                                @if ($errors->has('grade_description'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('grade_description') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						@if(Auth::user()->role_id == 1)
						<div>
                            <input id="status" type="hidden" class="form-control{{ $errors->has('division_status') ? ' is-invalid' : '' }}" name="status" value="accept">
                        </div>
                        @elseif(Auth::user()->role_id == 2)
                        <div>
                            <input id="status" type="hidden" class="form-control{{ $errors->has('division_status') ? ' is-invalid' : '' }}" name="status" value="pending">
                        </div>
                        @endif
						<div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
									<a onclick="history.go(-1)" class="btn btn-primary" style="color:#fff;">Back</a>
                                <button type="submit" class="btn btn-success" onclick="submitForm(this);">
                                    Save
                                </button>
                            </div>
                        </div>
					{!! Form::close() !!}
				</div>
			</div>	
		</div>
	</div>	
@endsection