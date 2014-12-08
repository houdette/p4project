

<?php

Class Trip extends Eloquent{
 
    public function accommodation() {
	 
	/* Trip has many accommodations
	   Define a one-to-many */
	   return $this->hasMany('Accommodation');
	
     }
}