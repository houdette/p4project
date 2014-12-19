

<?php


class TripController extends BaseController {
   
     public function _construct(){
		/* call baseController */
		parent::_construct();

		/* Logged in users only */

		$this->beforeFilter('auth');

	}
	public function getList()
	{
		if(!Auth::check())
		{
			return Redirect::to('login');
		}
		
		$trips = Trip::all();
	 	$itineraries = trip::all();
		return View::make('trip_list',
			array(
			'itineraries' => $itineraries,
			'trips' => $trips
			)
		);
	}

	public function getCreate()
	{  
		if(!Auth::check())
		{
			return Redirect::to('login');
		}

		$userId= Auth::id();

		return View::make('trip_create')->with('user_id', $userId);

	}

	public function postCreate()
	{
		if(!Auth::check())
		{
			return Redirect::to('login');
		}
		
		$user = User::find(Auth::id());

		$trip = new Trip();

		$trip->name = Input::get('name');
		$trip->duration = Input::get('duration');

		if($trip->save()){
			return Redirect::to('trips')->with('success', 'Trip added');
		}
		else {
			return Redirect::back()->withErrors($trip->errors());
		}
	}

	public function getEdit($id)
	{
		if(!Auth::check())
		{
			return Redirect::to('login');
		}

		$trip = Trip::find($id);

		if($trip){
			$userId= Auth::id();
			return View::make('trip_edit')->with('trip', $trip);
		}
		else {
			App::error();
		}
	}

	    
	public function postEdit()
	{
		if(!Auth::check())
		{
			return Redirect::to('login');
		}
		
		$userId= Auth::id();

		$trip = Trip::find(Input::get('id'));

		$trip->name = Input::get('name');
		$trip->duration = Input::get('duration');

		if($trip->save()){
			return Redirect::to('trips')->with('success', 'trip added');
		}
		else {
			return Redirect::back()->withErrors($trip->errors());
		}

	}   

	public function getDelete($id)
	{
		if(!Auth::check())
		{
			return Redirect::to('login');
		}
		
		$trip = Trip::find($id);

		if($trip and $trip->delete())
		{
			return Redirect::back()->with('success', 'trip has been deleted');
		}
		else
		{
			return App::error(404);
		}
	}

	//THIS one needs to post a DELETED trip to DB, user needs to be signed in. In Laravel it has to be found before it is DELETED.

	public function postDelete($id)
	{
		if(!Auth::check())
		{
			return Redirect::to('login');
		}
		
		$userId= Auth::id();

		return View::make('trip_delete')->with('user_id', $userId);
}}