@extends('_master')

  @section('title')
      
     Show all trips
     
  
  @stop
    
    
  @section ('navigation')
                   
  
  @stop
  
  @section('maintop')
  <h2 style =" margin-left: 50px">Add new Trip</h2>
	
	<form action="{{ action('TripController@postCreate') }}" method="post" role="form" style ="margin-left-50px;">

		<div class="form-group">
			{{ Form::label('name','Name') }}
			  {{ Form::input('text', 'name', null) }}
		</div>
		<div class="form-group">
			{{ Form::label('duration','Duration') }}
		{{ Form::input('duration', 'duration', null) }}
		</div>
		
		    <div style= "margin-left:100px;">{{ Form::submit('Create Trip') }}</div>
        
	</form>

	<h2>List of Trips</h2>

	@if ($trips->isEmpty())
		<p>There are no trips! </p>

	@else
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Name</th>
					<th>Image</th>
					<th>Duration</th>
					<th></th>
					<th></th>
				</tr>
			</thead>

			<tbody>
				@foreach($trips as $trip)
				<tr>
					<td>{{ $trip->name }}</td>
					<td><img width="200" src="{{ $trip->picture }}" /></td>
					<td>{{ $trip->duration }}</td>
					<td><?php echo HTML::link('trips/edit/' . $trip->id, 'Edit'); ?></td>
					<td><?php echo HTML::link('trips/delete/' . $trip->id, 'Delete', array('onclick' => 'return confirm(\'Delete?\')')); ?></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	@endif

@stop