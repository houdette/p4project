
@extends('_master')

@section('title')
Plan for Trip
@stop

@section('content')

	<h2>Ready to plan a trip</h2>

	{{ Form::open(array('route' => 'plan.trip.step2', 'method' => 'GET')) }}

		{{ Form::select('trip', Trip::all()->lists("name", "id"), Input::get('trip')) }} &nbsp;&nbsp;&nbsp;

		{{ Form::submit('Next >>') }}

	{{ Form::close() }}

@stop
