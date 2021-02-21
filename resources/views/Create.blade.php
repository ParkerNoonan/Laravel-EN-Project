@extends('layouts/layout')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
@stop

@section('header')
	@include('includes/header')
@stop

@section('content')
	<div>
		<p>About page</p>
		<p>This is the create page</p>
	</div>
@stop