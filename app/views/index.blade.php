@extends('_master')

  @section('title')
      
     Welcome to Task Manager
  
  @stop
    
    
  @section ('navigation')
                   
  
  @stop
  
  @section('maintop')

  <div class="main">
        <h1>Task Manager</h1>
          <p> When you login,this app lets you add and manage your tasks </p>
        <ul>
            <li>add a list of my tasks.</li>
            <li>show my saved tasks. </li>
            <li>delete unneeded tasks.</li>
        </ul>
    </div>
  @stop
  
  @section('content')
 	<div class="form-login">
	 		{{ Form::open(array('url' => '/book', 'method' => 'GET')) }}

		        {{ Form::label('query','Search') }}

		        {{ Form::text('query'); }}

		         {{ Form::submit('Search'); }}

	            </div>
		 	{{ Form::close() }}
		</div>
	</div>
 @stop


    	