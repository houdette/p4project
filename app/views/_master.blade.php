
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
                    
                       <img src="https://s3.amazonaws.com/devhouda/images/paristrip1.jpg" style = "height: 250px; 
 width:1000px; margin-left: 100px; "/><br>

                            <div class="navigation">
                                <h4><a href="/trips" target="_blank"> All Trips </a> 
                      
                            </div>
                     
                                    <ul>
                                    
                                    @if(Auth::check())
				                       <li><a href='/logout'>Log out: {{ Auth::user()->email; }}</a></li><br>
				                       <li><a href='/useritineraries'> ~ My saved itineraries</a></li>
				                       <li><a href='/itineraries/create'> + Add an Itinerary </a></li>
                                        <li><a href='/itineraries/edit'> * Edit an existing itinerary </a></li>
                                       <li><a href='/itineraries/delete'> - Delete an existing itinerary </a></li>
				                    @else 
		                
                                        <h4><li class="login"> <a href='/signup'>Sign up</a> or <a href='/login'>Log in</a></li></h4>
	                                @endif
	                
				                    </ul>
				     
			   </nav>
	                @yield ('maintop')
	                @yield ('content')

	                
	                
	                
	                
	                
	                
	               	                 
	                
	                 
 </body>
</html>
