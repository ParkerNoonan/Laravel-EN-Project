@extends('layouts/layout')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
@stop

@section('header')
	@include('includes/header')
@stop

@section('content')
<div>
	<p>Add in the valves for your site.</p>
	<form action="{{ action('Controller@Submit2') }}"  method="POST">
		@csrf
		Project Site: <br>
		<select name="proj_site">
			@foreach ( $test as $col_num => $col_val)
            	<option value="{{ $col_val}}">{{ $col_val }}</option>
        	@endforeach
		</select>
		<br><br>
		Valve 1 Size: <br>
		<input type="text" name="Valve_1_Size">
		<br><br>
		Valve 1 Manufacturer: <br>
		<input type="text" name="Valve_1_Man">
		<br><br>
		Valve 1 Model: <br>
		<input type="text" name="Valve_1_Model">
		<br><br>
		Valve 1 Serial #: <br>
		<input type="text" name="Valve_1_Serial">
		<br><br>
		Valve 1 Max Diff Pressure: <br>
		<input type="text" name="Valve_1_MDP">
		<br><br>
		Valve 1 Temperature Rating: <br>
		<input type="text" name="Valve_1_TR">
		<br><br>
		Valve 1 Max Wind Speed: <br>
		<input type="text" name="Valve_1_MWS">
		<br><br>
		Valve 1 Bettis Actuator Model: <br>
		<input type="text" name="Valve_1_BAM">
		<br><br>
		Valve 1 Pipeline MAOP: <br>
		<input type="text" name="Valve_1_PLMAOP">
		<br><br>
		Valve 1 Pipeline Design Pressure: <br>
		<input type="text" name="Valve_1_PLDP">
		<br><br>
		Valve 1 Pipe Grade: <br>
			<select name="Valve_1_Pipe_Grade">
				<option value="Gr B">Gr B</option>
				<option value="X52">X52</option>
				<option value="X60">X60</option>
			</select>
			<br><br>
		Valve 1 Tubing Size: <br>
		<input type="text" name="Valve_1_TS" value='3/8"'>
		<br><br>
		<button type="submit" value="Submit">Submit</button>
	</form>
</div>
@stop