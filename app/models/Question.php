<?php



class Question extends Eloquent {

	
	
	
	protected $table = 'questions';
	protected $fillable = array ('question_no','question','keywords','marks','specification_point_id','paper_id','user_id','status');
	
	/**
	 * 
	 * Rules
	 *
	 **/
	public static $rules = array(
	
		'question_no' => 'required',
		'question' => 'required',
		'marks' => 'required|numeric|min:1',
		'status' => 'in:super_public,open_public,school_public,private'
	);
	
	
	
	
	
	
	/**
	 * 
	 * Relationships
	 *
	 **/
	
	public function specificationPoint()
	{
		
		return $this->belongsTo('SpecificationPoint','specification_point_id');
	}
	
	public function paper()
	{
		
		return $this->belongsTo('Paper','paper_id');
	}
	
	public function user()
	{
		
		return $this->belongsTo('User','user_id');
	}

		
	

	
}