<?php

class IndexController extends BaseController {
	public function _construct(){
		
		parent::_construct();
		
		/* Logged in users only */
		$this->beforeFilter('auth');
	}
	
		
		
	
	/**
	*
	*/
	public function getIndex() {
	
	
    $userId = Auth::id();
    $user = User::find($userId);
    	
	
	return View::make('index');
	}
}