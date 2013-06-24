<?php



class Unit extends Eloquent {

	
	
	
	protected $table = 'units';
	protected $fillable = array ('*');
	
	
	/**
	 * Relationships
	 *
	 */

	
    public function specificationPoints()
	{
		
		return $this->hasMany('SpecificationPoint','unit_id');
	}
		
	

	
}