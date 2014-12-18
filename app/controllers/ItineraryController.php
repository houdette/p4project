
<?php


class ItineraryController extends BaseController {

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
	 	$itineraries = Itinerary::all();
		return View::make('itinerary_list',
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

		return View::make('itinerary_create')->with('user_id', $userId);

	}

	public function postCreate()
	{
		if(!Auth::check())
		{
			return Redirect::to('login');
		}
		
		$user = User::find(Auth::id());

		$itinerary = new Itinerary();

		$itinerary->name = Input::get('name');
		$itinerary->description = Input::get('description');

		if($itinerary->save()){
			$itinerary->users()->attach($user);
			return Redirect::to('itineraries')->with('success', 'Itinerary added');
		}
		else {
			return Redirect::back()->withErrors($itinerary->errors());
		}
	}

	public function getEdit($id)
	{
		if(!Auth::check())
		{
			return Redirect::to('login');
		}

		$itinerary = Itinerary::find($id);

		if($itinerary){
			$userId= Auth::id();
			return View::make('itinerary_edit')->with('itinerary', $itinerary);
		}
		else {
			App::error();
		}
	}

	    //THIS one needs to post EDITED itinerary to DB, user needs to be signed in. In Laravel it has to be found before it is edited. 

	public function postEdit()
	{
		if(!Auth::check())
		{
			return Redirect::to('login');
		}
		
		$userId= Auth::id();

		$itinerary = Itinerary::find(Input::get('id'));

		$itinerary->name = Input::get('name');
		$itinerary->description = Input::get('description');

		if($itinerary->save()){
			return Redirect::to('itineraries')->with('success', 'Itinerary added');
		}
		else {
			return Redirect::back()->withErrors($itinerary->errors());
		}

	}   

	public function getDelete($id)
	{
		if(!Auth::check())
		{
			return Redirect::to('login');
		}
		
		$itinerary = Itinerary::find($id);

		if($itinerary and $itinerary->delete())
		{
			return Redirect::back()->with('success', 'Itinerary has been deleted');
		}
		else
		{
			return App::error(404);
		}
	}

	//THIS one needs to post a DELETED itinerary to DB, user needs to be signed in. In Laravel it has to be found before it is DELETED.

	public function postDelete($id)
	{
		if(!Auth::check())
		{
			return Redirect::to('login');
		}
		
		$userId= Auth::id();

		return View::make('itinerary_delete')->with('user_id', $userId);
	}

}