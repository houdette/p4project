@extends('_master')

  @section('title')
      
     Show all trips
     
  
  @stop
    
    
  @section ('navigation')
                   
  
  @stop
  
  @section('maintop')
  
<h2>Add a Trip trip</h2>
  <form action="{{ action('TripController@postCreate') }}" method="post" role="form">

    		<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

			<div class="form">
				{{ Form::label('name','trip Name') }}
				{{ Form::input('text', 'name', null, ['size' => '5', 'maxlength'=>'10']) }}
			</div>
			<div class="form">
				{{ Form::label('Duration', 'Trip Duration') }}
				<br>
				{{ Form::input('duration', 'duration', null) }}
			</div>
			
			{{ Form::submit('Create trip') }}
			<a href="{{ action('IndexController@getIndex') }}">Cancel</a>
		</form>
  {{ Form::close() }}
@stop