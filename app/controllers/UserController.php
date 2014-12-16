<?php

class UserController extends BaseController {

 public function _construct()
 
 # Call parent basecontroller 
 
 parent::__construct();
    
    $this->beforeFilter('guest',
    array(
      'only' => array('getLogin', 'getSignup')
    ));






}