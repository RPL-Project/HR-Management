@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-6 offset-3">
			<div class="card">
				<div class="card-body">
					<form method="POST" action="{{ route('division.update', $division->id) }}">
                        {{csrf_field()}}
                        {{method_field('PATCH') }}
                        <div class="form-group row">
							<label for="division_status" class="col-md-4 col-form-label text-md-right">Division</label>
                            <div class="col-md-6">
                                <input id="division_status" type="text" class="form-control{{ $errors->has('division_status') ? ' is-invalid' : '' }}" name="division_status" value="{{($division->division_status)}}" required autofocus>

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
                                <textarea id="division_description" type="text" class="form-control{{ $errors->has('division_description') ? ' is-invalid' : '' }}" name="division_description"required>{{($division->division_description)}}</textarea><p style="font-size:12px; font-color:gray;"> Text only can input 200 Character</p>


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
                                <input id="division_salary" type="text" class="form-control{{ $errors->has('division_salary') ? ' is-invalid' : '' }}" name="division_salary" value="{{($division->division_salary)}}" required>

                                @if ($errors->has('division_salary'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('division_salary') }}</strong>
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
                                        <option>accept</option>
                                        <option>reject</option>
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