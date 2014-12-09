<?php 

class Accommodation extends Eloquent{
    
    /*The guarded property specifies attributes that should not be mass-assignable */
	protected $guarded = array('id', 'created_at', 'updated_at');

	
	public function trip() {
		/* Accommodation belongs to trip
		   an inverse one-to-many */
		return $this->belongsTo('Trip');
		
	}
	
	/* Accommodation belongs to many types */
	
	public function types(){
		
		return $this->belongsToMany('Type');
	}
	
}