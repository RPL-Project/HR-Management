@extends('layouts.app')

@section('content')
	<div id="wrapper">
		<div class="row">
			<div class="col">			
				<div class="list-group">				  
				  <a href="#" class="list-group-item list-group-item-action active">Dapibus ac facilisis in</a>
				  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
				  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
				  <a href="#" class="list-group-item list-group-item-action">Vestibulum at eros</a>
				</div>
				<br>
				<div class="alert alert-info">
					<h3>Lorem ipsum dolor.</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis dolor enim totam, fugiat minima amet ad tempore? Laboriosam, nisi, voluptatum.</p>
				</div>
			</div>
			<div class="col-9">					
				<div class="card">						
					<div class="card-body">
						<h4 class="card-title">Lorem ipsum dolor sit amet.</h4>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis dolor voluptatum quod iusto dolores sed, voluptates. Esse, illo? Laborum tenetur quod ab dolor rem veniam animi nihil illum, quo, repudiandae laudantium vero aut temporibus corporis ratione numquam. Impedit magnam, corporis.</p>
					</div>				
				</div>			
			</div>
		</div>				
	</div>	
@endsection

@section('footer')
	@include('layouts.footer')
@endsection