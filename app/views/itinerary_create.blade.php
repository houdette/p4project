@extends('_master')

@section('title')
  Create a new itinerary
@stop

@section('content')

 <!!Work on PHP Laravel logic to get the data-->

  <h2>Add a Trip Itinerary</h2>
  
  <form action="{{ action('ItineraryController@postCreate') }}" method="post" role="form">

    		<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

			<div class="form">
				{{ Form::input('text', 'name', null, ['size' => '5', 'maxlength'=>'10']) }}
				{{ Form::label('name','Itinerary Name') }}
			</div>
			<div class="form">
				{{ Form::input('text', 'Description', null, ['size' => '5', 'maxlength'=>'10']) }}
				{{ Form::label('Description', 'Itinerary Description') }}
			</div>
			
			{{ Form::submit('Create Itinerary') }}
			<a href="{{ action('IndexController@getIndex') }}">Cancel</a>
		</form>
  {{ Form::close() }}
  
  
@stop