@extends('layouts.app')

@section('content')
	<div id="wrapper">
			<div class="container">
				<h2 class="text-center"><strong>Profile</strong></h2>
				<hr>

				<div class="form-group">
				@foreach ($user as $index => $user)
					{{$user->name}}
					<br>
					{{$user->email}}
					<br>
					{!! Form::open(['route' => ['profile.edit', $user->id], 'method' => 'GET']) !!}
					{{csrf_field()}}
					{{ Form::submit('Edit', ['class' => 'btn btn-warning']) }}
					{!! Form::close() !!}
					<hr>
				@endforeach
				</div>
			</div>
	</div>
@endsection