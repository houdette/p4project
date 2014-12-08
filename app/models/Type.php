<?php

class Type extends Eloquent{
	
	
	public function accommodation(){
		
		/* Types of accommodations belong to many accommodations*/
		return $this->belongsToMany('Accommodation');
	}
	
}

