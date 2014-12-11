
 
 <?php 

class Task extends Eloquent{


   /*The guarded property specifies attributes that should not be mass-assignable */ 
	protected $guarded = array('id', 'created_at', 'updated_at');

	
	public function users() {
		/* Task belongs to user
		   an inverse one-to-many */
		return $this->belongsTo('User');
		
	}
	
}