
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
                  <nav>    
                    
                       <img src="https://s3.amazonaws.com/devhouda/images/paristrip1.jpg" style = "height: 250px; 
 width:1000px; margin-left: 100px; "/><br>

                            <div class="navigation">
                                <h4><a href="/" target="_blank">Trips </a> | <a href="/http://www.parispass.com/paris-attractions/index.html#.VJLosr6Fbdk" target="_blank">Paris Attractions</a> |
                
                                <a href="/trips" target="_blank">Trips</a> </h4> </div>
                    
                            </div>
                     
                   
                                    <ul>
                                      @if(Auth::check())
				                       <li> <a href='/logout'>Log out {{ Auth::user()->email; }}</a><li><br>
				                       <li><a href='/useritineraries'> My saved itineraries</a></li>
				                       <li><a href='/itineraries/create'> + Add an Itinerary </a></li>
                                       <li><a href='/itineraries/edit'> * Edit an existing itinerary </a></li>
                                       <li><a href='/itineraries/delete'> - Delete an existing itinerary </a></li>
				                      @else 
		                            <ul style = "margin:100px;"> <a href='/signup'>Sign up</a> or <a href='/login'>Log in</a></ul><br/>
	                @endif
	                
				     </ul>
				     
				   </nav>
	                @yield ('maintop')
	                @yield ('content')
	                
	                
	                
	                
	                
	                
	               	                 
	                
	                 
 </body>
</html>
