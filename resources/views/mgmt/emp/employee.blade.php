@extends('layouts.app')

@section('content')
	<div id="wrapper">
			<div class="container">
				<h2 class="text-center"><strong>Employee Management</strong></h2>
				<hr>
			<div class="row">
				<div class="col-2">
					<a class="btn btn-primary btn-block" href="{{ route('employee.create')}}"><i class="fas fa-plus-square"></i> Add New</a>	
				</div>
				<div class="col">
					<form action="">					
						<div class="form-row">						
							<div class="col-11">
								<input type="text" class="form-control" placeholder="search">
							</div>
							<div class="col">
								<button class="btn btn-primary btn-block"><i class="fas fa-search"></i></button>
							</div>																	
						</div>
					</form>						
				</div>
			</div>	
			<table class="table" style="margin-top: 25px;">
			  <thead class="thead-dark">
			    <tr class="table-light">
			      <th scope="col">No.</th>
			      <th scope="col">Employee ID</th>
			      <th scope="col">Full Name</th>
			      <th scope="col">Gender</th>
			      <th scope="col">Email</th>
			      <th scope="col">Division</th>
			      <th scope="col">Grade</th>
			      @auth('web')
			      <th scope="col">Action</th>
			      @endauth
			    </tr>
			  </thead>
			  <tbody>
			     @foreach ($user  as $index => $user)
			    <tr class="table-light">			      
			      <th scope="row">{{ $index+1 }}</th>
			      <td>{{ $user->employee_id }}</td>
			      <td>{{ $user->name }}</td>
			      <td>{{ $user->gender }}</td>
			      <td>{{ $user->email }}</td>
			      <td>{{ $user->division_id }}</td>
			      <td>{{ $user->grade_id }}</td>
			      @auth('web')
				      <td>
				      	<div class="row">
				      		<div class="form-inline">
					      		<div class="form-group mb-2">
					      			{!! Form::open(['route' => ['employee.edit', $user->id], 'method' => 'GET']) !!}
					      				{{ Form::submit('Edit', ['class' => 'btn btn-warning']) }}
					      			{!! Form::close() !!}	
					      		</div>
					      		&nbsp; | &nbsp;
					      		<div class="form-group mb-2">
					      			{!! Form::open(['route' => ['employee.destroy', $user->id], 'method' => 'DELETE']) !!}
							      		{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
							      	{!! Form::close() !!}	
					      		</div>	
					      	</div>
				      	</div>
				      </td>
			      @endauth
			    </tr>
			   @endforeach		
			  </tbody>
			</table>
		</div>
	</div>
@endsection