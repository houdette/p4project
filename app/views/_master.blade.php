
<!DOCTYPE html>

<html>

   
<head>

               <meta charset="UTF-8">
	              <!-- css -->
	              <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
                     <title> @yield ('title','Task Manager') </title>
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
                     <img src="http://integratedwebquestwiki.wikispaces.com/file/view/tasks-banner.jpg"
                       <h4><a href="/" target="_blank">Home</a> | <a href="/tasks" target="_blank">My Tasks</a> |
                
                       <a href="/mylists" target="_blank">My Lists</a> </h4> </div>
                
                    </div>
                     
                    @if(Auth::check())
                    <ul>
				     <li> <a href='/logout'>Log out {{ Auth::user()->email; }}</a><li><br>
				     <li><a href='/task'>All Tasks</a></li>
			         <li><a href='/list'>All List</a></li>
			         <li><a href='/task/create'>+ Add Task </a></li>
				    @else 
		              <li><a href='/signup'>Sign up</a> or <a href='/login'>Log in</a><li><br/>
	                @endif
	                
				     </ul>
				     
				   </nav>
	                @yield ('maintop')
	                @yield ('content')
	                
	                
	                
	                
	               	                 
	                
	                 
 </body>
</html>
