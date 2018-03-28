@extends('layouts.app')

@section('content')
<br>
<h2 class="text-center"><strong>Salary slip</strong></h2>
		<br>
		<table class="table">
				<tr>
					<th>No</th>
					<th>Employee id</th>
					<th>Name</th>
					<th>Division Salary</th>
					<th>Grade Salary</th>
					<th>Bonus Salary</th>
					<th>Total Salary</th>
				</tr>	
				<tr>
					<td>1</td>
					<td>{{$user->employee_id}}</td>
					<td>{{$user->name}}</td>
					<td>{{$division->division_salary}}</td>
					<td>-</td>
					<td>{{$user->division_salary+$user->grade_salary}}</td>
			    </tr>
		</table>
@endsection