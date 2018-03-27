@extends('layouts.app')

@section('content')
	<div id="wrapper">
		<div class="row">
			<div class="col-12">		
				<div class="card">
					@if (Auth::check())
					@if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2)						
					<div class="card-body">
						<h3 class="card-title"> &raquo; Division</h3>
						<hr class="hr-dash">
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
			      <td style="max-width: 200px;" align="left">{{ $division->division_description }}</td>
			      <td>{{ $division->status}}</td>
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
			<br><br>
			<h3 class="card-title"> &raquo; Grade</h3>
			<hr class="hr-dash">
			<table class="table text-center" style="margin-top: 25px;" id="grd-table">
			  <thead class="thead-dark">
			    <tr class="table-light" align="center">
			      <th scope="col">No.</th>
			      <th scope="col">Grade Name</th>
			      <th scope="col">Description</th>
			      <th scope="col">Status</th>
			      @auth('web')
			      	<th scope="col">Action</th>
			      @endauth
			    </tr>
			  </thead>
			  <tbody>
			  @foreach ($grade  as $index => $grade)
			    <tr class="table-light" align="center">			      
			      <th scope="row">{{ $index+1 }}</th>
			      <td>{{ $grade->grade_status }}</td>
			      <td style="max-width:200px;">{{ $grade->grade_description }}</td>
			      <td>{{ $grade->status }}</td>
			      @auth('web')
				      <td>
				      	<div class="row">
				      		<div class="form-inline mid" >
					      		<div class="form-group mb-2" style="color:white;" >
					      			{!! Form::open(['route' => ['grade.edit', $grade->id], 'method' => 'GET']) !!}
					      				{{ Form::submit('Edit', ['class' => 'btn btn-primary']) }}
					      			{!! Form::close() !!}	
					      		</div>
					      		&nbsp; | &nbsp;
					      		<div class="form-group mb-2">
					      			{!! Form::open(['route' => ['grade.destroy', $grade->id], 'method' => 'DELETE']) !!}
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
					@else
					<div class="card-body">
					Lorem Ipsum Dolor Sit Amet
					</div>
					@endif
					@endif			
				</div>		
			</div>
		</div>				
	</div>	
	<script src="{{url('js/jquery.min.js')}}" ></script>
    <!-- ini untuk bootstrap -->
    <script src="{{url('js/tether.min.js')}}" ></script>
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
	<script type="text/javascript">
    $(document).ready( function () {
	    $('#grd-table').DataTable();
	} );
	</script>
@endsection

@section('footer')
	@include('layouts.footer')
@endsection