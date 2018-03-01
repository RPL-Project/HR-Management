@extends('layouts.app')

@section('content')
	<div id="wrapper">
			<div class="container">
				<h2 class="text-center"><strong>Division Management</strong></h2>
				<hr>
			<div class="row">
				@auth('web')
					<div class="col-2">
						<a class="btn btn-primary btn-block" href="{{ route('division.create')}}"><i class="fas fa-plus-square"></i> Add New</a>	
					</div>
				@endauth
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
			<table class="table text-center" style="margin-top: 25px;">
			  <thead class="thead-dark">
			    <tr class="table-light">
			      <th scope="col">No.</th>
			      <th scope="col">Division Name</th>
			      <th scope="col">Description</th>
			      @auth('web')
			      	<th scope="col">Action</th>
			      @endauth
			    </tr>
			  </thead>
			  <tbody>
			  @foreach ($division  as $index => $division)
			    <tr class="table-light">			      
			      <th scope="row">{{ $index+1 }}</th>
			      <td>{{ $division->division_status }}</td>
			      <td>{{ $division->division_description }}</td>
			      @auth('web')
				      <td>
				      	<div class="row">
				      		<div class="form-inline">
					      		<div class="form-group mb-2">
					      			{!! Form::open(['route' => ['division.edit', $division->id], 'method' => 'GET']) !!}
					      				{{ Form::submit('Edit', ['class' => 'btn btn-warning']) }}
					      			{!! Form::close() !!}	
					      		</div>
					      		&nbsp; | &nbsp;
					      		<div class="form-group mb-2">
					      			{!! Form::open(['route' => ['division.destroy', $division->id], 'method' => 'DELETE']) !!}
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