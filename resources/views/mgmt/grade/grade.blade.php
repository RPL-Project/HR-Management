@extends('layouts.app')

@section('content')
	<div id="wrapper">
			<div class="container">
				<h2 class="text-center"><strong>Grade Management</strong></h2>
				<hr>
			<div class="row">
				<div class="col-2">
					<a class="btn btn-primary btn-block" href="{{ route('grade.create')}}"><i class="fas fa-plus-square"></i> Add New</a>	
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
			      <th scope="col">Grade Name</th>
			      <th scope="col">Description</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr class="table-light">
			      <th scope="row">1</th>
			      <td>&nbsp;</td>
			      <td>&nbsp;</td>
			    </tr>
			    <tr class="table-light">
			      <th scope="row">2</th>
			      <td>&nbsp;</td>
			      <td>&nbsp;</td>
			    </tr>
			    <tr class="table-light">
			      <th scope="row">3</th>
			      <td>&nbsp;</td>
			      <td>&nbsp;</td>
			    </tr>
			  </tbody>
			</table>
		</div>
	</div>
@endsection