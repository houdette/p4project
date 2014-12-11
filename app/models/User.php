<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	 
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	
 
    	   
	public function tasks() {
		/* user may have many tasks */
		/* Define one to many */
		return $this->hasMany('Task'); 
	
    }
    public function lists() {
		/* user may have many lists */
		/* Define one to many */
		return $this->hasMany('List'); 
	
    
    }

}
