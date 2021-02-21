@extends('layouts/layout')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
@stop

@section('header')
	@include('includes/header')
@stop

@section('content')
	<h1>DO NOT ADJUST YOUR TV!</h1>
	<p>Do you find yourself bored at work?</p>
	<p>Is your boss micromanage you?</p>
	<p>Do you work with people that are holding you back?</p>
	<p>... wait for it... it's coming... just catching my breath</p>
	<h1>THEN THIS BLOG IS FOR YOU!</h1>
	<p>This blog will contain such conveted information like:</p>
	<ol>
		<li>How to tailor your resume</li>
		<li>How to get your boss off your back</li>
		<li>How to learn DAMN near anything!</li>
		<li>How to have confidence, or at least fake like you do!</li>
	</ol>
@stop

