@extends('layouts/layout')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
@stop

@section('header')
	@include('includes/header')
@stop

@section('content')
	<form action="{{ action('Controller@Submit3') }}" method="GET">
		<div>
		<p>The form below will let you edit a project site</p>		
			Site Name:<br>
			<input type="text" name="sitename" value="{{ $test[0]->SiteName }}" readonly> 
			<br><br>
			EN Project Number:<br>
			<input type="number" name="EN_proj_num" value="{{ $test[0]->ProjectNum }}" readonly>
			<br><br>
			Communication Work Order Number:<br>
			<input style="width: 300px" type="number" name="comm_wo_num" value="{{ $test[0]->CommNum }}" readonly>
			<br><br>
			Construction Work Order Number:<br>
			<input style="width: 300px" type="number" name="const_wo_num" value="{{ $test[0]->ConstNum }}" readonly>
			<br><br>

			Issuance:<br>

			@if ($test[0]->Issuance == "IFR")
				<input style="width: 300px" type="text" value="Issued For Review" readonly>
				<br><br>
			@elseif ($test[0]->Issuance == "IFB")
				<input style="width: 300px" type="text" value="Issued For Bid" readonly>
				<br><br>
			@elseif ($test[0]->Issuance == "IFC")
				<input style="width: 300px" type="text" value="Issued For Construction" readonly>
				<br><br>
			@else
				<input style="width: 300px" type="text" value="Re-Issued For Construction" readonly>
				<br><br>
			@endif
	
			Prepared By:<br>
			<input type="text" name="prepared_by" value="{{ $test[0]->PrepBy }}" readonly>
			<br><br>
			Reviewed By:<br>
			<input type="text" name="reviewed_by" value="{{ $test[0]->ReviewBy }}" readonly>
			<br><br>
			Approved By:<br>
			<input type="text" name="approved_by" value="{{ $test[0]->ApproveBy }}" readonly>
			<br><br>
			Date of Submittal:<br>
			<input type="Date" name="date" value="{{ $test[0]->subDate }}" readonly>
			<br><br>
			Site Address, Or relative location:<br>
			<input style="width: 300px" type="text" name="location" value="{{ $test[0]->location}}" readonly>
			<br><br>
			Latitude:<br>
			<input type="number" step="0.000001" name="latitude" value="{{ $test[0]->latitude }}" readonly>
			<br><br>
			Longitude:<br>
			<input type="number" step="0.000001" name="longitude" value="{{ $test[0]->longitude }}" readonly>
			<br><br>
			Section:<br>
			<input type="text" name="section" value="{{ $test[0]->section }}" readonly>
			<br><br>
			Township:<br>
			<input type="text" name="township" value="{{ $test[0]->township }}" readonly>
			<br><br>
			Range:<br>
			<input type="text" name="range" value="{{ $test[0]->Range_ }}" readonly>
			<br><br>
			Division:<br>
			<input type="text" name="division" value="{{ $test[0]->division }}" readonly>
			<br><br>
			County:<br>
			<input type="text" name="county" value="{{ $test[0]->county }}" readonly>
			<br><br>
			Scope Bullet 1:<br>
			<textarea rows="4" cols="60" name="scopeBullet1" maxlength="200" readonly>{{ $test[0]->scopeBullet1 }}</textarea>
			<br><br>
			Scope Bullet 2:<br>
			<textarea rows="4" cols="60" name="scopeBullet2"  maxlength="200" readonly>{{ $test[0]->scopeBullet2 }}</textarea>
			<br><br>
			Scope Bullet 3:<br>
			<textarea rows="4" cols="60" name="scopeBullet3" maxlength="200" readonly>{{ $test[0]->scopeBullet3 }}</textarea>
			<br><br>
			Scope Bullet 4:<br>
			<textarea rows="4" cols="60" name="scopeBullet4" maxlength="200" readonly>{{ $test[0]->scopeBullet4 }}</textarea>
			<br><br>
			Scope Bullet 5:<br>
			<textarea rows="4" cols="60" name="scopeBullet5" maxlength="200" readonly>{{ $test[0]->scopeBullet5 }}</textarea>
			<br><br>
			<button type="submit" value="Submit">Back to Site List</button>
		</form>
	</div>
@stop