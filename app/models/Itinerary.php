<?php 

class Itinerary extends Eloquent{

   protected $fillable = array(
    'name',
    'description',
    'image',
  );
  
 /*Itineraries belong to many users */
  public function users(){
		
		return $this->belongsTo('User');
	}
	
  public function trips(){
		
		return $this->belongsTo('Trip');
	}
	}

	
	



