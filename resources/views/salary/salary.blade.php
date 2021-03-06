@extends('layouts.app')

@section('content')
<div id="wrapper">
	<div class="container">
	@if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
		<h2 class="text-center"><strong>Salary slip</strong></h2>
		<hr>
		<br>
		<table class="table dataTable" style="margin-top: 25px;" id="salary-table">
			<thead class="thead-dark">
				<tr>
					<th>No</th>
					<th>Employee id</th>
					<th>Name</th>
					<th>Division Salary</th>
					<th>Grade Salary</th>
					<th>Bonus Salary</th>
					<th>Total Salary</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($user  as $index => $user)	
				<tr>		      
				     <th scope="row">{{ $index+1 }}</th>
				     <td>{{$user->employee_id}}</td>
				     <td>{{$user->name}}</td>
				     <td>{{$user->division_salary}}</td>
				     <td>{{$user->grade_salary}}</td>
				     <td> - </td>
				     <td>{{$user->division_salary+$user->grade_salary}}</td>
			    </tr>
				@endforeach
			</tbody>
		</table>
		<a href="#" class="btn btn-success" style="color:#fff;">Bonus</a>
		<a href="{{ route('print.index') }}" class="btn btn-warning" style="color:#fff;">Print</a>
	@else
		<h2 class="text-center"><strong>Salary slip</strong></h2>
		<br>
		<table class="table dataTable" style="margin-top: 25px;" id="salary-table">
			<thead class="thead-dark">
				<tr>
					<th>No</th>
					<th>Employee id</th>
					<th>Name</th>
					<th>Division Salary</th>
					<th>Grade Salary</th>
					<th>Bonus Salary</th>
					<th>Total Salary</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($users as $user)	
				<tr>		      
				     <th scope="row">1</th>
				     <td>{{$user->employee_id}}</td>
				     <td>{{$user->name}}</td>
				     <td>{{$user->division_salary}}</td>
				     <td>{{$user->grade_salary}}</td>
				     <td> - </td>
				     <td>{{$user->division_salary+$user->grade_salary}}</td>
			    </tr>
				@endforeach
			</tbody>
		</table>
		<a href="#" class="btn btn-success" style="color:#fff;">Bonus</a>
		<a href="{{ route('print.index') }}" class="btn btn-warning" style="color:#fff;">Print</a>
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
	    $('#salary-table').DataTable();
	} );
  </script>

@endsection