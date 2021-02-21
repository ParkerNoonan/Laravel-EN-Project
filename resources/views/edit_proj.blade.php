@extends('layouts/layout')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
@stop

@section('header')
	@include('includes/header')
@stop

@section('content')
	<form action="{{ action('Controller@Submit5') }}" method="POST">
		<div>
		<p>The form below will let you edit a project site</p>
			@csrf
			<input type="hidden" name="ID" value="{{ $test[0]->ID }}">
			Site Name:<br>
			<input type="text" name="sitename" value="{{ $test[0]->SiteName }}"> 
			<br><br>
			EN Project Number:<br>
			<input type="number" name="EN_proj_num" value="{{ $test[0]->ProjectNum }}">
			<br><br>
			Communication Work Order Number:<br>
			<input style="width: 300px" type="number" name="comm_wo_num" value="{{ $test[0]->CommNum }}">
			<br><br>
			Construction Work Order Number:<br>
			<input style="width: 300px" type="number" name="const_wo_num" value="{{ $test[0]->ConstNum }}">
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
			<input type="text" name="prepared_by" value="{{ $test[0]->PrepBy }}">
			<br><br>
			Reviewed By:<br>
			<input type="text" name="reviewed_by" value="{{ $test[0]->ReviewBy }}">
			<br><br>
			Approved By:<br>
			<input type="text" name="approved_by" value="{{ $test[0]->ApproveBy }}">
			<br><br>
			Date of Submittal:<br>
			<input type="Date" name="date" value="{{ $test[0]->subDate }}">
			<br><br>
			Site Address, Or relative location:<br>
			<input style="width: 300px" type="text" name="location" value="{{ $test[0]->location}}">
			<br><br>
			Latitude:<br>
			<input type="number" step="0.000001" name="latitude" value="{{ $test[0]->latitude }}">
			<br><br>
			Longitude:<br>
			<input type="number" step="0.000001" name="longitude" value="{{ $test[0]->longitude }}">
			<br><br>
			Section:<br>
			<input type="text" name="section" value="{{ $test[0]->section }}">
			<br><br>
			Township:<br>
			<input type="text" name="township" value="{{ $test[0]->township }}">
			<br><br>
			Range:<br>
			<input type="text" name="range" value="{{ $test[0]->Range_ }}">
			<br><br>
			Division:<br>
			<input type="text" name="division" value="{{ $test[0]->division }}">
			<br><br>
			County:<br>
			<input type="text" name="county" value="{{ $test[0]->county }}">
			<br><br>
			Scope Bullet 1:<br>
			<textarea rows="4" cols="60" name="scopeBullet1" maxlength="200">{{ $test[0]->scopeBullet1 }}</textarea>
			<br><br>
			Scope Bullet 2:<br>
			<textarea rows="4" cols="60" name="scopeBullet2" maxlength="200">{{ $test[0]->scopeBullet2 }}</textarea>
			<br><br>
			Scope Bullet 3:<br>
			<textarea rows="4" cols="60" name="scopeBullet3" maxlength="200">{{ $test[0]->scopeBullet3 }}</textarea>
			<br><br>
			Scope Bullet 4:<br>
			<textarea rows="4" cols="60" name="scopeBullet4" maxlength="200">{{ $test[0]->scopeBullet4 }}</textarea>
			<br><br>
			Scope Bullet 5:<br>
			<textarea rows="4" cols="60" name="scopeBullet5" maxlength="200">{{ $test[0]->scopeBullet5 }}</textarea>
			<br><br>
			<button type="submit" value="Submit">Submit</button>
		</form>
	</div>
@stop