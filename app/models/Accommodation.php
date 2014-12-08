<?php 

class Accommodation extends Eloquent{
	
	public function trip() {
		/* Accommodation belongs to trip
		   an inverse one-to-many */
		return $this->belongsTo('trip');
		
	}
	
	
}