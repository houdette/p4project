
@extends('_master')

@section('title')
  Edit a new itinerary
@stop

@section('content')

<!!Work on PHP Laravel logic to get the data-->

<h1>Edit an itinerary </h1>
  {{ Form::open(array('url' => 'itinerary/edit')) }}
    {{ Form::label('name', 'Itinerary') }}
    {{ Form::text('name', 'itineray->name') }}
  
    {{ Form::label('description', 'Description') }}
    {{ Form::text('description','description') }}
    {{ Form::hidden('user_id', $user_id) }}
    {{ Form::hidden('itinerary_id', 'itineraryid') }}
    {{ Form::submit('Edit Itinerary') }}
    {{ Form::close() }}
@stop



