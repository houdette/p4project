@extends('_master')

@section('title')
Create a new itinerary
@stop

@section('content')
  <h3 style = "margin-left: 30px;">List of Itineraries</h3>

  @if ($itineraries->isEmpty())
    <p>There are no itineraries! </p>

  @else
    <table class="table table-striped" style = "margin-left:50px, margin-right:50px;">
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
