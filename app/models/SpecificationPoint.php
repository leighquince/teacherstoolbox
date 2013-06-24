<?php



class SpecificationPoint extends Eloquent {

	
	
	
	protected $table = 'specificationPoints';
	protected $fillable = array ('*');
	
	
	/**
	 * Relationships
	 *
	 */
	
	public function questions()
	{
		
		return $this->hasMany('Question','specification_point_id');
	}
	
	
    public function unit()
	{
		
		return $this->belongsTo('Unit','unit_id');
	}

		
	

	
}