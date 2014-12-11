<?php
class List extends Eloquent{
	
	
	public function user(){
		
		/* lists belong to user*/
		
		
		return $this->belongsTo('User');
	}
	
}
