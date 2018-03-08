@extends('layouts.app')

@section('content')
	<div id="wrapper">
		<div class="container">
			<h2 class="text-center"><strong>Profile</strong></h2>
				<hr>
				<br>

			<div class="row">
					<div class="col-3" style="margin-bottom: 20px;">
						<div class="card" style="width: 12.7rem;height: 12.7rem;">
							<div class="card-body">
								<img src="img/avatar.png" class="profile" style="width: 10rem; height: 10rem; " />
							</div>
						</div>
					</div>
					<div class="col-4" style="margin-bottom: 20px;">
						<div class="card" style="width: 25rem;">
							<div class="card-body">
								<table>
									<tr>
										<td class="td">Employee id</td><td>: {{Auth::user()->employee_id}}</td>
									</tr>
									<tr>
										<td class="td">Name</td><td>: {{Auth::user()->name}}</td>
									</tr>
									<tr>	
										<td class="td">Gender</td><td>: {{Auth::user()->gender}}</td>
									</tr>
									<tr>	
										<td class="td">Email</td><td>: {{Auth::user()->email}}</td>
									</tr>	
									<tr>
										<td class="td">Division</td>
										<td>: 
										@foreach($users as $division) 
										{{$division->division_status}}
										@endforeach
										</td>
									</tr>	
									<tr>	
										<td class="td">Grade</td><td>: 
										@foreach($users as $grade)
										{{$grade->grade_status}}
										@endforeach
										</td>
									</tr>
									<tr>
										<td></td>
										<td>
										{!! Form::open(['route' => ['profile.edit', Auth::user()->id], 'method' => 'GET']) !!}
										{{csrf_field()}}
										{{ Form::submit('Edit Profile', ['class' => 'btn btn-success']) }}
										{!! Form::close() !!}</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
		</div>
	</div>
@endsection