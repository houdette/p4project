@extends('_master')

@section('title')
  Sign Up to edit your itineraries
@stop

@section('content')

<!-- /app/views/signup.blade.php -->
  
    <div style = "margin-left:100px;">
  <h2 style = "color: white;">Sign up</h2>

    {{ Form::open(array('url' => '/signup')) }}
       
       <h5 style ="color:white;"> First Name</h5>
        
        {{ Form::text('first') }}<br><br>
         
          <h5 style ="color:white;">Last Name </h5>
          
             {{ Form::text('last') }}<br><br>
      
              <h5 style ="color:white;">Email</h5>
    
                {{ Form::text('email') }}<br><br>

                 <h5 style ="color:white;"> Password:</h5>
    
                   {{ Form::password('password') }}<br><br>

                    
                     {{ Form::submit('Submit') }}

        {{ Form::close() }}
      </div>
        @stop