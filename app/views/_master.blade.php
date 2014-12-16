
<!DOCTYPE html>

<html>

   
<head>

               <meta charset="UTF-8">
	              <!-- css -->
	                 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
                     <title> @yield ('title','Paris Itineraries') </title>
                      <!--more css -->
                      <link rel='stylesheet' href='{{ asset( 'css/p4.css')}}'type = 'text/css'>
                  @yield ('navigation')

           </head>
           
             <body>
                    @if(Session::get('flash_message'))
		            <div class='flash-message'>{{ Session::get('flash_message') }}</div>
	                @endif
                 <nav>    
                    <div class="navigation" style="margin:center;">
                     <img src="https://s3.amazonaws.com/devhouda/images/paristrip1.jpg" style = "height: 250px; width:1000px; margin-left: 50px;"/><br>
                       <h4> <a href="/" target="_blank">Home</a> | <a href="/tasks" target="_blank">My Itineraries</a> |
                
                       <a href="/trips" target="_blank">Trips</a> </h4> </div>
                
                    </div>
                     
                   
                    <ul>
                     @if(Auth::check())
				     <li> <a href='/logout'>Log out {{ Auth::user()->email; }}</a><li><br>
				     <li><a href='/itineraries'>All Itineraries</a></li>
			         <li><a href='/#'>All Trips </a></li>
			         <li><a href='/itineraries/create'>+ Add an Itinerary </a></li>
				    @else 
		              <ul style = "margin: ";> <a href='/signup'>Sign up</a> or <a href='/login'>Log in</a></ul><br/>
	                @endif
	                
				     </ul>
				     
				   </nav>
	                @yield ('maintop')
	                @yield ('content')
	                
	                
	                
	                
	               	                 
	                
	                 
 </body>
</html>
