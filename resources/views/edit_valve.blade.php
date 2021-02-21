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
			<th>Valve Size</th>
			<th>Valve Man.</th>
			<th>Valve Serial #</th>
			<th>Max Pressure Diff.</th>
			<th>View Valve?</th>
			<th>Edit Valve?</th>
			<th>Delete Valve?</th>
			<th>Valve Sizing</th>
			<th>Actuator Data Sheet</th>
		</tr>
	@foreach ($test as $var)
    	<tr>
    		<td>{{ $var->SiteName }}</td>
    		<td>{{ $var->Valve_1_Size }}"</td>
    		<td>{{ $var->Valve_1_Man }}</td>
    		<td>{{ $var->Valve_1_Serial }}</td>
    		<td>{{ $var->Valve_1_MDP }} psig</td>
    		<td><a href="{{ action('Controller@Submit12', ['ID' => $var->ID]) }}">View</a></td>
    		<td><a href="{{ action('Controller@Submit10', ['ID' => $var->ID]) }}">Edit</a></td>
    		<td><a href="{{ action('Controller@Submit11', ['ID' => $var->ID]) }}">Delete</a></td>
    		<td><a href="{{ action('Controller@Submit13', ['ID' => $var->ID,
    													   'dia' => $var->Valve_1_Size,
    													   'ansi' => '150',
    													   'op_pres' => $var->Valve_1_MDP,
    													   'man' => 'Cameron']) }}">Verify Sizing</a></td>
    		<td><a href="{{ action('Controller@Submit15', ['ID' => $var->ID,
    													   'dia' => $var->Valve_1_Size,
    													   'ansi' => '150',
    													   'op_pres' => $var->Valve_1_MDP,
    													   'man' => 'Cameron']) }}">Create Data Sheet</a></td>											   
    	</tr>
	@endforeach
	</table>
	{{ $test->links() }}
@stop