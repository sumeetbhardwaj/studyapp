<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Eduction</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/font-awesome.css') }}">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
</head>
<body>

@include('templates.header');
<div id="main-content">
	<div class="container">
		<div class="row">
@yield('content')
		</div>
	</div>
</div>

@include('templates.footer')
<script src="{{ asset('public/assets/js/jquery.js')}}"></script>
<script src="{{ asset('public/assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('public/assets/js/mainCustom.js')}}"></script>

</body>
</html>



