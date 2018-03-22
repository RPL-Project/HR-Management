@extends('layouts.app')

@section('content')
@if (Auth::check())
	<div id="wrapper">
			<div class="container">
			@if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
				<h2 class="text-center"><strong>Division Management</strong></h2>
				<hr>
			<div class="row">
				@auth('web')
					<div class="col-2">
						<a class="btn btn-success btn-block" href="{{ route('division.create')}}"><i class="fas fa-plus-square"></i> Add New</a><br>
					</div>
				@endauth
			</div>	
			<table class="table text-center" style="margin-top: 25px;" id="div-table">
			  <thead class="thead-dark">
			    <tr class="table-light" align="center">
			      <th scope="col">No.</th>
			      <th scope="col">Division Name</th>
			      <th scope="col">Description</th>
			      <th scope="col">Status</th>
			      @auth('web')
			      	<th scope="col">Action</th>
			      @endauth
			    </tr>
			  </thead>
			  <tbody>
			  @foreach ($division  as $index => $division)
			    <tr class="table-light" align="center">			      
			      <th scope="row">{{ $index+1 }}</th>
			      <td>{{ $division->division_status }}</td>
			      <td style="max-width: 300px;" align="left">{{ $division->division_description }}</td>
			      <td>{{ $division->status }}</td>
			      @auth('web')
				      <td>
				      	<div class="row">
				      		<div class="form-inline mid">
					      		<div class="form-group mb-2" style="color:white;">
					      			{!! Form::open(['route' => ['division.edit', $division->id], 'method' => 'GET']) !!}
					      				{{ Form::submit('Edit', ['class' => 'btn btn-primary']) }}
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
		@else
			<h2 class="text-center"><strong>Division Management</strong></h2>
				<hr>
			<div class="row">
			</div>	
			<table class="table text-center" style="margin-top: 25px;" id="div-table">
			  <thead class="thead-dark">
			    <tr class="table-light" align="center">
			      <th scope="col">No.</th>
			      <th scope="col">Division Name</th>
			      <th scope="col">Description</th>
			      <th scope="col">Status</th>
			    </tr>
			  </thead>
			  <tbody>
			  @foreach ($user  as $index => $division)
			    <tr class="table-light" align="center">			      
			      <th scope="row">{{ $index+1 }}</th>
			      <td>{{ $division->division_status }}</td>
			      <td style="max-width:300px;">{{ $division->division_description }}</td>
			      <td>{{ $division->status }}</td>
			    </tr>
			   @endforeach			    
			  </tbody>
			</table>
		@endif
		</div>
	</div>
	<script src="{{url('js/jquery.min.js')}}" ></script>
    <!-- ini untuk bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" ></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <!-- end bootstrap -->

	<!-- ini untuk datatables -->
    <script src="{{url('js/jquery.dataTables.min.js')}}"></script>

    <!-- Pastikan posisi dibawah import datatablesnya -->
    <script type="text/javascript">
    $(document).ready( function () {
	    $('#div-table').DataTable();
	} );
	</script>
@else
<div class="card-body">
	You are guest
</div>
@endif
@endsection