<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<style type="text/css">
			body{
				margin: 0;
				padding: 0;
			}
			
			.sidenav{
				height: 100%;
				width: 496px;
				position: fixed;
				z-index: 1;
				top: 0;
				right: 0;
				background-color: #fff;
				overflow-x: hidden;
			}
			
			.control-background{
				width: 100%;
				height: 100%;
				z-index: 1;
				position: fixed;
				left: 0;
			}
			
			fieldset{
				margin-left:50px;
				margin-top: 45px;
				height: 80%;
			}
			
			input.size{
				width: 90%;
			}
			
			button.size{
				width: 30%;
			}
			
			.control-logo{
				width: 70%;
				height: 70%:
			}
			
			a{
				color: black;
			}
			
			a:hover{
				text-decoration: none;
				color: black;
			}
			
			#footer{
				padding: 10px;
				left: 0;
				float: left;
			}
			    /* For desktop: */
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

@media only screen and (max-width: 768px) {
    /* For mobile phones: */
    [class*="col-"] {
        width: 100%;
    }
}
		</style>
    <title>Register</title>
	</head>

	<body>
	  <img src="img/signup.jpg" alt="gambar" class="control-background"/>
      <form method="POST" action="{{route('auth.register')}}">
	  {{csrf_field()}}
		<div class="sidenav">
			<fieldset>
					<div class="form-group">
						<img src="img/LOGO.png" alt="bridge" class="control-logo"/>
					</div>
					<div class="form-group">
						<label for="inputName">Name</label>
						<input type="text" name="name" id="inputName" class="form-control size {{$errors->has('name') ? 'is-invalid' : ''}}" placeholder="Name" value="{{old('name')}}" required>
						@if($errors->has('name'))
							<div class="invalid-feedback">
							{{$errors->first('name')}}
							</div>
						@endif
					</div>
					<div class="form-group">
						<label for="inputEmail">Email address</label>
						<input type="email" name="email" id="inputEmail" class="form-control size {{$errors->has('email') ? 'is-invalid' : ''}}" placeholder="Email address" value="{{old('email')}}" required>
						@if($errors->has('email'))
							<div class="invalid-feedback">
							{{$errors->first('email')}}
							</div>
						@endif
					</div>
					<div class="form-group">
						<label for="inputPassword">Password</label>
						<input type="password" name="password" id="inputPassword" class="form-control size {{$errors->has('password') ? 'is-invalid' : ''}}" placeholder="Password" required>
						@if($errors->has('password'))
							<div class="invalid-feedback">
							{{$errors->first('password')}}
							</div>
						@endif
					</div>
					<div class="form-group">
						<label for="inputPasswordConfirmation">Re-Password</label>
						<input type="password" name="password_confirmation" id="inputPasswordConfirmation" class="form-control size {{$errors->has('password_confirmation') ? 'is-invalid' : ''}}" placeholder="Password Confirmation" required>
						@if($errors->has('password_confirmation'))
							<div class="invalid-feedback">
							{{$errors->first('password_confirmation')}}
							</div>
						@endif
					</div>
					<div class="form-group">
						<button class="btn btn-primary size" type="submit">Register</button>
					</div>
			</fieldset>
			<div id="footer">
				<p>Bridge Technologi Services (PT Intersolusi Tekonologi Asia) <br> &copy; 2018. All Right Reserved</p>
			</div>
		</div>
      </form>
	</body>
</html>
