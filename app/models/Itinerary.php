<?php 

 class Itinerary extends Eloquent{

     protected $fillable = array(
     'name',
     'description',
     'picture'
  );
  
 
	
  public function trip(){
		
		return $this->belongsTo('Trip');
	}
	}

	
	



