
@extends('_master')

@section('title')
  Edit itinerary
@stop

@section('content')

<h1>Edit an itinerary </h1>

<form action="{{ action('ItineraryController@postEdit') }}" method="post" role="form">
                
    <input type="hidden" name="id" value="{{ $itinerary->id }}" />

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-group" name="name" value="{{ $itinerary->name }}" />
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-group" name="description" >{{ $itinerary->description }}</textarea>
    </div>
    <input type="submit" value="Save" class="btn btn-primary" />

    <a href="{{ action('ItineraryController@getList') }}" class="btn btn-link">Cancel</a>

</form>

@stop

