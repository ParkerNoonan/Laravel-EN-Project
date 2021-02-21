<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/Act_Data_Sheet.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@yield('style')
</head>
<body>
	@yield('header')
	<div class="divider"></div>
	@yield('content')
</body>
</html>