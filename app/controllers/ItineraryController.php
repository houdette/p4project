
<?php


class ItineraryController extends BaseController {

     public function _construct(){
	   /* call baseController */
	   parent::_construct();
	   
	   /* Logged in users only */
	   
	   $this->beforeFilter('auth');
	   
 }
 
 
 
     public function getList()
     {
	 //  THIS one needs to display all itineraries and if possible to loop through them to Loop through results to read some itineraries 
	
	
	   return View::make('itinerary_list');
      }


  
      public function getCreate()
  
      {  

       $userId= Auth::id(); 
  
       return View::make('itinerary_create')->with('user_id', $userId);
  
  }
  
  //THIS one needs to post created itinerary to DB, user needs to be signed in. 
  
  public function postCreate(){
  /*
   $user = Auth::id();
   $itinerary= new Itinerary;
   $itinerary->name = Input::get('');
   $itinerary->description = Input::get('');
   //$itinerary
   
  */ 
  }
  
  public function getEdit()
	{
	$userId= Auth::id();
		
		return View::make('itinerary_edit')->with('user_id', $userId);
	}
	
    //THIS one needs to post EDITED itinerary to DB, user needs to be signed in. In Laravel it has to be found before it is edited. 
    
   public function postEdit(){
   
   $userId= Auth::id();
		
		return View::make('itinerary_edit')->with('user_id', $userId);
	   
   }   
   
    public function getDelete()
	{
	$userId= Auth::id();
		
		return View::make('itinerary_delete')->with('user_id', $userId);
	}
	
//THIS one needs to post a DELETED itinerary to DB, user needs to be signed in. In Laravel it has to be found before it is DELETED.
    
    public function postDelete()
	{
	$userId= Auth::id();
		
	return View::make('itinerary_delete')->with('user_id', $userId);
	}
      
   }