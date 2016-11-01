<!DOCTYPE html>
<html lang="ES">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Encuesta 1 @yield('title')</title>
		<link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
	</head>
	<body>
		
		@yield('content')
		<script src="{{asset("js/jquery-3.1.1.min.js")}}"></script>
		<script src="{{asset("js/bootstrap.min.js")}}"></script>
	</body>
</html>