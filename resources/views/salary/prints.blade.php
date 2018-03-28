@extends('layouts.app')
@section('content')
<div id="wrapper">
	<div class="container">
	<br>
	@if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
		<a href="#" onclick="window.print()" style="text-decoration: none; color: black;"><h2 class="text-center"><strong>Salary slip</strong></h2>
		<hr>
		<br>
		<table class="table" style="margin-top: 25px;">
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
	@else
		<a href="#" onclick="window.print()" style="text-decoration: none; color: #000"><h2 class="text-center"><strong>Salary slip</strong></h2></a>
		<br>
		<table class="table">
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
	@endif
	</div>
</div>
<script>
    alert("Click Salary slip to print");
</script>
@endsection