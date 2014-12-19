
<?php

class TripPlannerController extends BaseController {
	public function _construct(){
		
		parent::_construct();
		
		/* Logged in users only */
		$this->beforeFilter('auth');
	}

	public function selectTrip(){
		return View::make('select_trip');
	}

	public function selectItinerary(){
		if(Input::has('trip')){
			return View::make('select_itinerary')->withTrip(Trip::findOrFail(Input::get('trip')));
		}
		else {
			return Redirect::back()->withError('Invalid Trip to select itinerary');
		}
	}

	public function saveTrip(){
		$trip = Input::get('trip');
		$user = Auth::user()->id;
		$itineraries = Input::get('itinerary');

		if(is_array($itineraries) && count($itineraries) == 0){
			return Redirect::back()->withError('Please select atleast 1 itinerary');
		}

		foreach($itineraries as $itinerary){
			$r = new TripPlan;

			$r->itinerary_id = $itinerary;
			$r->user_id = $user;
			$r->trip_id = $trip;

			$r->save();
		}
		//return View::make('saved-trip');
		//->withSuccess('Trip has been planned successfully. Enjoy your trip!');

		return Redirect::route("plan.trip")->withSuccess('Trip has been planned successfully. Enjoy your trip!');
	}
}