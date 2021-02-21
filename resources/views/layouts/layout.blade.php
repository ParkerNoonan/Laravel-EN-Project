<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	@yield('header')
	<div class="divider"></div>
	@yield('content')
</body>
</html>