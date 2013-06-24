<?php



class Specification extends Eloquent {

	
	
	
	protected $table = 'specifications';
	protected $fillable = array ('*');
	
	
	/**
	 * Relationships
	 *
	 */
	
	public function units()
	{
		
		return $this->hasMany('Unit','specification_id');
	}
	
	
   		
	

	
}