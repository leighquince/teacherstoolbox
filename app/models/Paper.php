<?php



class Paper extends Eloquent {

	
	
	
	protected $table = 'papers';
	protected $fillable = array ('*');
	
	
	/**
	 * Relationships
	 *
	 */
	 
	public function questions()
	{
		
		return $this->hasMany('Question','paper_id');
	}
		
	

	
}