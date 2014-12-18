
 
 <?php 

 class Trip extends Eloquent{
	
	        
	     /* A Trip has itineraries  */
	
	        public function itineraries(){
		
		      return $this->hasMany('Itinerary');
		
		     }
		     
	        public static function getTripId() {
		    $trips = Array();
		    $collection = Trip::all();
		    foreach($collection as $trip) {
			$trips[$trip->id] = $trip->name;
		    }
		    return $trips;
	        }


}