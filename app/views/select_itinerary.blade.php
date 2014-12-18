@extends('_master')

@section('title')
Plan for a Trip
@stop

@section('content')

	<h2>Ready to plan a trip</h2>

	{{ Form::open(array('route' => 'plan.trip.save', 'method' => 'POST')) }}

		{{ Form::hidden('trip', $trip->id) }}

		{{ Form::select('itinerary[]', Itinerary::all()->lists("name", "id"), Input::get('itinerary'), array('multiple' => 'multiple')) }} &nbsp;&nbsp;&nbsp;

		{{ Form::submit('Plan >>') }} OR {{ HTML::link('itineraries', 'create itinerary') }}

	{{ Form::close() }}

@stop
