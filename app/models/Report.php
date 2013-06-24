<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Report extends Eloquent {

	
	
	
	protected $name;
	protected $gender;
	
	
	
	
	public function __construct($nameIn, $genderIn)
	{
		$this->name = $nameIn;
		$this->gender = $genderIn;
		
		
	}
	
	
	
	public function getHeShe($capital = false)
	{
		if($this->gender === 'm')
		{	
			if($capital)
			{
				return "He";
			}else{	
				return "he";
			}
		}else{
			if($capital)
			{
				return "She";
			}else{	
				return "she";
			}
		}		
	}
	
	
	public function getHimHer($capital = false)
	{
		if($this->gender === 'm')
		{	
			if($capital)
			{
				return "Him";
			}else{	
				return "him";
			}
		}else{
			if($capital)
			{
				return "Her";
			}else{	
				return "her";
			}
		}		
	}
	
	public function getHisHer($capital = false)
	{
		if($this->gender === 'm')
		{	
			if($capital)
			{
				return "His";
			}else{	
				return "his";
			}
		}else{
			if($capital)
			{
				return "Her";
			}else{	
				return "her";
			}
		}		
	}
	
	public function getHimselfHerself($capital = false)
	{
		if($this->gender === 'm')
		{	
			if($capital)
			{
				return "Himself";
			}else{	
				return "himself";
			}
		}else{
			if($capital)
			{
				return "Herself";
			}else{	
				return "herself";
			}
		}		
	}
	
	

	
}