<!DOCTYPE html>
<html lang="en">

	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- CSRF Token -->
	    <meta name="csrf-token" content="{{ csrf_token() }}">
	    <title>Home</title>
	</head>
	<body>
		HI {{Auth::user()->name}}
		<a href="{{ route('auths.logout') }}" title="Logout">Logout</a>
		<hr>
	</body>

</html>