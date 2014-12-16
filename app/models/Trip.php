
 
 <?php 

class Trip extends Eloquent{

     protected $fillable = array('name','duration');
  
  
    /*The guarded property specifies attributes that should not be mass-assignable */ 
	protected $guarded = array('id', 'created_at', 'updated_at');
	
}