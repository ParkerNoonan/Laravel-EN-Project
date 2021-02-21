@extends('layouts/layout')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
@stop

@section('header')
	@include('includes/header')
@stop

@section('content')
	<div>
		<p>You can reach me through this blog!</p>
		<p>Did you think I'd put my real contact info on here?</p>
		<p>Sorry to disappoint! I'm still working at a job I frequently post about.</p>
		<p>But if you ask, I'll answer. Duh! That's why I starting writing this blog.</p>
		<p>So just post and add #Bored_Eng. THAT'S ME!</p>
	</div>

@stop