<!DOCTYPE html>
<html>
<head>
	<title>mater_page1</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compartible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
	@include('layout.header')
	<div id="content">
		<h1>Self learning</h1>
		@yield('noi_dung')
	</div>	
	@include('layout.footer')
</body>
</html>