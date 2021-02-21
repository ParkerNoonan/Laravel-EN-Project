@extends('layouts/layout')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
@stop

@section('header')
	@include('includes/header')
@stop

@section('content')
	<p>This page will let you view, edit, or delete sites</p>
	<table>
		<tr>
			<th>Site Name</th>
			<th>Project Number</th>
			<th>Issuance</th>
			<th>Submittal Date</th>
			<th>Latitude</th>
			<th>Longitude</th>
			<th>Edit Site?</th>
			<th>Delete Site?</th>
			<th>View Site?</th>
			<th>Design Basis Manual</th>
		</tr>
	@foreach ($test as $var)
    	<tr>
    		<td>{{ $var->SiteName }}</td>
    		<td>{{ $var->ProjectNum }}</td>
    		<td>{{ $var->Issuance }}</td>
    		<td>{{ $var->subDate }}</td>
    		<td>{{ $var->latitude }}</td>
    		<td>{{ $var->longitude}}</td>
    		<td><a href="{{ action('Controller@Submit7', ['SiteName' => $var->SiteName, 'ID' => $var->ID]) }}">View</a></td>
    		<td><a href="{{ action('Controller@Submit4', ['SiteName' => $var->SiteName, 'ID' => $var->ID]) }}">Edit</a></td>
    		<td><a href="{{ action('Controller@Submit6', ['SiteName' => $var->SiteName, 'ID' => $var->ID]) }}">Delete</a></td>
    		<td><a href="{{ action('Controller@Submit8', ['SiteName' => $var->SiteName, 'ID' => $var->ID]) }}">Create Design Basis Manual</a></td>
    	</tr>
	@endforeach
	</table>
	{{ $test->links() }}
@stop