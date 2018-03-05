@extends('layouts.app')

@section('content')
	<div id="wrapper">
		<div class="container">
			<h2 class="text-center"><strong>Profile</strong></h2>
			<hr>
			<div class="row">
					<div class="col-4" style="margin-bottom: 20px;">
						<div class="card" style="width: 18rem;">
							<div class="card-body">
								Employee id : {{Auth::user()->employee_id}}<br>
								Name        : {{Auth::user()->name}}<br>
								Email       : {{Auth::user()->email}}<br>
								Gender      : {{Auth::user()->gender}}<br>
								{!! Form::open(['route' => ['profile.edit', Auth::user()->id], 'method' => 'GET']) !!}
								{{csrf_field()}}
								{{ Form::submit('Edit', ['class' => 'btn btn-warning']) }}
								{!! Form::close() !!}
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