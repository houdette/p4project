<?php

class TaskController extends BaseController {

  public function __construct() {
		# Calling upon BaseController construct
		parent::__construct();
		$this->beforeFilter('auth');
	}


  public function getCreate()
  {
	  return View:make('tasks'); 
  }

  public function postCreate()
  
  {
  $task = new Task;
  $task->user()->associate(Auth::user());
  $task->title = Input::get('title')
  $task->due_date = Input::get('due_date')
  $task->done = Input::get('done')
	  
	try{
	
	$task->save();	
		
	}
	
	/* if it fails */
	
	catch (Exception $e){
		
		return Redirect::to('/myTasks')->with('flash_message','tasks not saved, please try again.')->withInput();
	}
	  
  }




}