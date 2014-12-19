

<?php

class TripPlan extends Eloquent {
	

	public function user(){
		return $this->belongsTo('User');
	}

	public function trip(){
		return $this->belongsTo('Trip');
	}

	public function itinerary(){
		return $this->belongsTo('Itinerary');
	}
}