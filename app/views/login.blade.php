
@extends('_master')

@section('title')
  Login to edit your itineraries
@stop

@section('content')

  <!-- /app/views/login.blade.php -->
    <div class = "login-form">
      <h1 style ="color: white;">Log in</h1>
      
        {{ Form::open(array('url' => '/login')) }}


        <h5 style="color:white;"> Email:</h5> 
        {{ Form::text('email') }}<br><br>

        <h5 style="color:white;">Password:</h5>
        {{ Form::password('password') }}<br><br>
        <div class="button-login">
        {{ Form::submit('Submit') }}
       </div>
        {{ Form::close()}}

</div>
@stop