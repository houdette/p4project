
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
                                <h4 style =" margin-left: 100px;"><a href="/trips" target="_blank"> All Trips </a></h4>
                                    <ul>
                                    
                                    @if(Auth::check())
                                       <li><a href='/logout'>Log out: {{ Auth::user()->email; }}</a></li><br>
                                       <li><?php echo HTML::link('', 'Home'); ?></li>
			                           <li><?php echo HTML::link('plan/trip', 'Plan a Trip'); ?></li>
			                            <li><?php echo HTML::link('itineraries', 'Itineraries'); ?></li>
			                             <li><?php echo HTML::link('trips', 'Trips'); ?></li>
                                       @else
			                          <h4><li class="login"> <a href='/signup'>Sign up</a> or <a href='/login'>Log in</a></li></h4></h4>
			                         
	                                @endif
	                
 
				                    </ul>

				                    
                             </div>


                                   
	                
			   </nav>
	                @yield ('maintop')
	                @yield ('content')

	      
	                
	                
	                
	                
	               	                 
	                
	                 
 </body>
</html>
