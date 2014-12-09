<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
  	<title>@yield('title' , 'Paris Itineraries')</title>

    <!-- CSS -->
	<link rel='stylesheet' href='{{ asset( 'css/p4.css')}}'type ='text/css'>
	
</head>
<body>
    @yield ('image')
                 
	<div class="container">  
	@yield('contenthead')

	@if(Auth::check())
		<a href='/logout'>Log out {{ Auth::user()->email; }}</a><br>
	@else 
		<a href='/signup'>Sign up</a> or <a href='/login'>Log in</a><br/>
	@endif

	@if(Session::get('flash_message'))
	<div class="error">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Error!</strong> {{ Session::get('flash_message') }}.
	</div>
	@endif

	@if(Session::get('status_message'))
	<div class="status">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Success</strong> {{ Session::get('status_message') }}.
	</div>
	@endif

    @yield('main')
	</div>
    
    @yield('footer')

</body>
</html>
