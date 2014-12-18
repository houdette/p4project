@extends('_master')

@section('title')
Create a new itinerary
@stop

@section('content')

  <h2>Add new itinerary</h2>
  <form action="{{ action('ItineraryController@postCreate') }}" method="post" role="form">

    <div class="form-group">
      {{ Form::label('name','Name') }}
      {{ Form::input('text', 'name', null) }}
    </div>
    <div class="form-group">
      {{ Form::label('description','Description') }}
      <br>
      {{ Form::textarea('description', '', null) }}
    </div>
    
    {{ Form::submit('Create Itinerary') }}

  </form>

  <h2>List of Itineraries</h2>

  @if ($itineraries->isEmpty())
    <p>There are no itineraries! </p>

  @else
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>Image</th>
          <th>Description</th>
          <th></th>
          <th></th>
        </tr>
      </thead>

      <tbody>
        @foreach($itineraries as $itinerary)
        <tr>
          <td>{{ $itinerary->name }}</td>
          <td><img width="200" src="{{ $itinerary->picture }}" /></td>
          <td>{{ $itinerary->description }}</td>
          <td><?php echo HTML::link('itineraries/edit/' . $itinerary->id, 'Edit'); ?></td>
          <td><?php echo HTML::link('itineraries/delete/' . $itinerary->id, 'Delete', array('onclick' => 'return confirm(\'Delete?\')')); ?></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  @endif

@stop
