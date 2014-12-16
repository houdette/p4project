<?php

class BaseController extends Controller {


    public function _construct(){
	    
	    $this->beforeFilter('csrf', array('on' => 'post'));
    }
    
    
	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	
	
}

