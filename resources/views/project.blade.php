@extends('layouts/layout')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
@stop

@section('header')
	@include('includes/header')
@stop

@section('content')
	<div>
		<p>The form below will let you create a design basis manual</p>
		<form action="{{ action('Controller@Submit1') }}" method="POST">
			@csrf
			Site Name:<br>
			<input type="text" name="sitename" value="testab"> 
			<br><br>
			EN Project Number:<br>
			<input type="number" name="EN_proj_num" value="123">
			<br><br>
			Communication Work Order Number:<br>
			<input style="width: 300px" type="number" name="comm_wo_num" value="123">
			<br><br>
			Construction Work Order Number:<br>
			<input style="width: 300px" type="number" name="const_wo_num" value="123">
			<br><br>
			Issuance:<br>
			<select name="issuance">
				<option value="IFR">Issued For Review</option>
				<option value="IFB">Issued For Bid</option>
				<option value="IFC">Issued For Construction</option>
				<option value="Re-IFC">Re-Issued For Construction</option>
			</select>
			<br><br>
			Prepared By:<br>
			<input type="text" name="prepared_by" value="pjn">
			<br><br>
			Reviewed By:<br>
			<input type="text" name="reviewed_by" value="dsn">
			<br><br>
			Approved By:<br>
			<input type="text" name="approved_by" value="crm">
			<br><br>
			Date of Submittal:<br>
			<input type="Date" name="date" value="05/20/2020">
			<br><br>
			Site Address, Or relative location:<br>
			<input style="width: 300px" type="text" name="location" value="test">
			<br><br>
			Latitude:<br>
			<input type="number" step="0.000001" name="latitude" value="39.123">
			<br><br>
			Longitude:<br>
			<input type="number" step="0.000001" name="longitude" value="-104.124">
			<br><br>
			Section:<br>
			<input type="text" name="section" value="test">
			<br><br>
			Township:<br>
			<input type="text" name="township" value="test">
			<br><br>
			Range:<br>
			<input type="text" name="range" value="test">
			<br><br>
			Division:<br>
			<input type="text" name="division" value="test">
			<br><br>
			County:<br>
			<input type="text" name="county" value="test">
			<br><br>
			Scope Bullet 1:<br>
			<textarea rows="4" cols="60" name="scopeBullet1" value="test" maxlength="200"></textarea>
			<br><br>
			Scope Bullet 2:<br>
			<textarea rows="4" cols="60" name="scopeBullet2" value="test" maxlength="200"></textarea>
			<br><br>
			Scope Bullet 3:<br>
			<textarea rows="4" cols="60" name="scopeBullet3" value="test" maxlength="200"></textarea>
			<br><br>
			Scope Bullet 4:<br>
			<textarea rows="4" cols="60" name="scopeBullet4" value="test" maxlength="200"></textarea>
			<br><br>
			Scope Bullet 5:<br>
			<textarea rows="4" cols="60" name="scopeBullet5" value="test" maxlength="200"></textarea>
			<br><br>
			<button type="submit" value="Submit">Submit</button>
		</form>
	</div>
@stop