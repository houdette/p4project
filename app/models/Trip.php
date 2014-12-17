
 
 <?php 

class Trip extends Eloquent{

     protected $fillable = array('name','duration');
  
  
    /*The guarded property specifies attributes that should not be mass-assignable */ 
	protected $guarded = array('id', 'created_at', 'updated_at');
	
	/* Trips belong to many users  */
	
	public function user(){
		
		return $this->hasMany('User');
	}
	
	/* A Trip has itineraries  */
	
	  public function itineraries(){
		
		return $this->hasMany('Itinerary');
	  }


}