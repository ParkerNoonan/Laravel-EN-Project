@extends('layouts/layout')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
@stop

@section('header')
	@include('includes/header')
@stop

@section('content')

<p>See below for a summary of valve information.<br>Below the summary is the sizing information.
<br>If you need to change any information, please click here to edit the <a href="{{action('Controller@Submit9')}}">valve informaiton.</a></p>
<h3><u>Site & Valve Info for Sizing</u></h3>
<p>Valve Size (in): {{ $area2[0]->Valve_1_Size }}"</p>
<p>Valve Manufacturer: {{ $area2[0]->Valve_1_Man }}</p>
<p>Max Differential Presssure: {{ $area2[0]->Valve_1_MDP }} psi</p>
<p>Pipeline MAOP: {{ $area2[0]->Valve_1_PLMAOP }} psi</p>
<p>Pipeline Design Pressure: {{ $area2[0]->Valve_1_PLDP }} psi</p>
<h3><u>Valve Torque Sizing</u></h3>
<p>Valve Torque (no safety factor): {{ $area1['1'] }} in-lb</p>
<p>Valve Torque (w/ safety factor): {{ $area1['2'] }} in-lb</p>
<p>Maximum Allowable Stem Torque: {{ $area1['3'] }} in-lb</p>
<p>Run Torque (no safety factor): {{ $area1['4'] }} in-lb</p>
<p>Run Torque (w/ safety factor): {{ $area1['5'] }} in-lb</p>

@stop