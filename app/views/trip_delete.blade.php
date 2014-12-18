@extends('_master')

@section('title')
Delete an itinerary
@stop

@section('content')



<h2> Delete Trip Itinerary</h2>

<h4> If you wish to delete an itinerary, please sign up or log in first.</h4><br>

<form action="{{ action('ItineraryController@getDelete') }}" method="get" role="form">
	<input type="hidden" name="name" value="" />
	<input type = "hidden" name = "_token" value =">
	<input type="submit" />
	<a href="{{ action('IndexController@getIndex') }}"class="button-cancel"">Cancel</a>
</form>

@stop


