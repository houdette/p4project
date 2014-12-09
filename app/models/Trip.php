

<?php

Class Trip extends Eloquent{
 
    public function accommodation() {
	 
	/* Trip has many accommodations
	   Define a one-to-many */
	   return $this->hasMany('Accommodation');
	   
	   }
	   
	   
	public static function nameId() {
		
		$trips = Array();
		
		$collection = Trip::all();
		
		foreach($collection as $trip) {
			$trips[$trip->id] = $trip->name;
		}
		return $trips;
     }
}