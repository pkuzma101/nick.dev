<!DOCTYPE html>
<html>
<head>
	<title>Nick Janecki - Computer Graphics Designer</title>
	<meta name="generator" content='An experienced CGI artist and animator.'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" href="css/nick.css">

	@yield('topscript')
</head>
<body>
	@include('partials.navbar')
	
	@yield('content')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script src="js/nick.js"></script>

    @yield('bottomscript')
</body>
</html>