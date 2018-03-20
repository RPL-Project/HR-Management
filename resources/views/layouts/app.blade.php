<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HR Management</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/fontawesome-all.css') }}">
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"></style>

</head>
<body>    
    @include('layouts.header')
    <div id="app" class="container">
        @yield('content')
    </div>    
    @yield('footer')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
     <script src="{{url('js/jquery.min.js')}}" ></script>
    <!-- ini untuk bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" ></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <!-- end bootstrap -->

    <!-- ini untuk datatables -->
    <script src="{{url('js/jquery.dataTables.min.js')}}"></script>
</body>
</html>
