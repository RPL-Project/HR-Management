@extends('layouts.app')

@section('content')
	<div id="wrapper">
		<div class="container">
			<h2 class="text-center"><strong>Profile</strong></h2>
				<hr>
				{!! Form::open(['route' => ['profile.edit', Auth::user()->id], 'method' => 'GET']) !!}
				{{csrf_field()}}
				{{ Form::submit('Edit Profile', ['class' => 'btn btn-success']) }}
				{!! Form::close() !!}
				<br>

			<div class="row">
					<div class="col-4" style="margin-bottom: 20px;">
						<div class="card" style="width: 18rem;">
							<div class="card-body">
								<img src="img/avatar.png" class="profile" />
							</div>
						</div>
					</div>
					<div class="col-4" style="margin-bottom: 20px;">
						<div class="card" style="width: 25rem;">
							<div class="card-body">
								<table>
									<tr>
										<td class="td">Employee id</td><td>{{Auth::user()->employee_id}}</td>
									</tr>
									<tr>
										<td class="td">Name	    </td><td>{{Auth::user()->name}}</td>
									</tr>
									<tr>	
										<td class="td">Email       </td><td>{{Auth::user()->email}}</td>
									</tr>
									<tr>	
										<td class="td">Gender      </td><td>{{Auth::user()->gender}}</td>
									</tr>	
								</table>
							</div>
						</div>
					</div>
			<!--@if (count($users) > 0)				
				@foreach ($users as $count => $user)
					@if ($count % 3 == 0)
						</div><div class="row">				
					@endif
					<div class="col-4" style="margin-bottom: 20px;">
						<div class="card" style="width: 18rem;">
							<!-- <img class="card-img-top" src="..." alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">{{$user->name}}</h5>
							    <p class="card-text" >
							    	{{$user->gender}}<br>
							    	{{$user->email}}				    	
							    </p>
							    {!! Form::open(['route' => ['profile.edit', $user->id], 'method' => 'GET']) !!}
								{{csrf_field()}}
								{{ Form::submit('Edit', ['class' => 'btn btn-warning']) }}
								{!! Form::close() !!}
							</div>
						</div>			
					</div>					
				@endforeach				
			</div>		
			@else
				<div>Tidak ada user</div>
			@endif
			-->
		</div>
	</div>
@endsection