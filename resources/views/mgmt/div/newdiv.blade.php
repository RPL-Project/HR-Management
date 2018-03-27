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
					{!! Form::open(['route' => 'division.store', 'method' => 'POST']) !!}
						<div class="form-group row">
							<label for="division_status" class="col-md-4 col-form-label text-md-right">Division</label>
                            <div class="col-md-6">
                                <input id="division_status" type="text" class="form-control{{ $errors->has('division_status') ? ' is-invalid' : '' }}" name="division_status" value="{{old('$division->division_status')}}" required autofocus>

                                @if ($errors->has('division_status'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('division_status') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						<div class="form-group row">
							<label for="division_description" class="col-md-4 col-form-label text-md-right">Description</label>
                            <div class="col-md-6">
                                <textarea id="division_description" type="text" class="form-control{{ $errors->has('division_description') ? ' is-invalid' : '' }}" name="division_description" value="{{old('$division->division_description')}}" required > </textarea>
                             

                                @if ($errors->has('division_description'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('division_description') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
                        <div class="form-group row">
                            <label for="division_salary" class="col-md-4 col-form-label text-md-right">Salary</label>
                            <div class="col-md-6">
                                <input id="division_salary" type="text" class="form-control{{ $errors->has('division_salary') ? ' is-invalid' : '' }}" name="division_salary" value="{{old('$division->division_salary')}}" required autofocus>

                                @if ($errors->has('division_salary'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('division_salary') }}</strong>
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