@extends('layouts.app')

@section('content')
	<div id="wrapper">
			<div class="container">
				<h2 class="text-center"><strong>Grade Management</strong></h2>
				<hr>
			<div class="row">
				@auth('web')
					<div class="col-2">
						<a class="btn btn-success btn-block" href="{{ route('grade.create')}}"><i class="fas fa-plus-square"></i> Add New</a><br>	
					</div>
				@endauth
			</div>	
			<table class="table text-center" style="margin-top: 25px;" id="grd-table">
			  <thead class="thead-dark">
			    <tr class="table-light" align="center">
			      <th scope="col">No.</th>
			      <th scope="col">Grade Name</th>
			      <th scope="col">Description</th>
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
			      <td style="max-width:300px;">{{ $grade->grade_description }}</td>
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
	    $('#grd-table').DataTable();
	} );
	</script>
@endsection