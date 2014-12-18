
@extends('_master')

@section('title')
  Edit trip
@stop

@section('content')

<h1>Edit an trip </h1>

<form action="{{ action('TripController@postEdit') }}" method="post" role="form">
                
    <input type="hidden" name="id" value="{{ $trip->id }}" />

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-group" name="name" value="{{ $trip->name }}" />
    </div>
    <div class="form-group">
        <label for="duration">Duration</label>
        <input class="form-group" name="duration" value="{{ $trip->duration }}" />
    </div>
    <input type="submit" value="Save" class="btn btn-primary" />

    <a href="{{ action('TripController@getList') }}" class="btn btn-link">Cancel</a>

</form>

@stop