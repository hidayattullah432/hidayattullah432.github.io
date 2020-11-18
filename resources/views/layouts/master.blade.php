<!doctype <!DOCTYPE html>
<html lang="en" id="home">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- the above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>@yield('title')</title>
	<!-- boostrap -->
	<link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">
	{{-- <link href="{{asset('css/bootstrap-theme.min.css') }}" rel="stylesheet"> --}}
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('css/hp.css')}}" rel="stylesheet">
    
	
    </head>
    
<body>

    @include('layouts.navigasi')
    @yield('content')



	@yield('footer')



    <script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/navbar.js')}}"></script>

</body>
</html>
       

