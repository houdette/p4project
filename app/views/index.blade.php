@extends('_master')

  @section('title')
     Paris Itineraries| Main
  @stop

    @section('image')
       <div class="heather">
       <img id="image" src="{{ asset('pictures/paris.jpeg')}}" alt="Paris"/>
       </div>
  
     @stop



<div class="jumbotron">
        <h1>Paris Itineraries </h1>
        <p>This app lets you choose your Paris itineraries according to the time you have </p>
        <ul>
            <li>show a list of itineraries.</li>
            <li>Choose the accommodation types according to your budget. </li>
            <li>show your saved itineraries.</li>
        </ul>
    </div>
@stop

@section('content')
    	