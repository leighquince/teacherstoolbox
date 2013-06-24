<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class ICTReport extends Report {

	
	
	
	protected $name;
	protected $gender;
	protected $attitude;
	protected $deadlines;
	protected $theory;
	protected $practical;
	protected $independant;
	
	
	
	public function __construct($nameIn, $genderIn, $attitudeIn, $deadlinesIn, $theoryIn, $practicalIn, $independantIn)
	{
		$this->name = $nameIn;
		$this->gender = $genderIn;
		$this->attitude = $attitudeIn;
		$this->deadlines = $deadlinesIn;
		$this->theory = $theoryIn;
		$this->practical = $practicalIn;
		$this->independant = $independantIn;
		
	}
	
	
	
	
	
	public function getAttitude()
	{
		if($this->attitude === 'a')
		{
			$string = $this->name." always comes to lessons fully prepared and equipped.";
			return $string;
		}
		
		if($this->attitude === 'b')
		{
			$string = $this->name." normally comes to lessons fully prepared and equipped.";
			return $string;
			
		}
		
		if($this->attitude === 'c')
		{
			$string = $this->name." usually comes to lessons prepared and equipped.";
			return $string;
			
		}
		
		if($this->attitude === 'd')
		{
			$string = $this->name." sometimes comes to lessons prepared and equipped.";
			return $string;
			
		}
		
		return " **ATTITUDE ERROR** ";
		
	}
	
	public function getDeadlines(){
	
		if($this->deadlines === 'a')
		{
			$string = " ".$this->getHeShe(true)." has met all of the deadlines set for independent work for both the theory and practical aspects of the course.";
			return $string;
		}
		
		if($this->deadlines === 'b')
		{
			$string = " ".$this->getHeShe(true)." has met most of the deadlines set for independent work for both the theory and practical aspects of the course.";
			return $string;
		}
		if($this->deadlines === 'c')
		{
			$string = " ".$this->getHeShe(true)." has met some deadlines set for independent work both for theory and practical aspects of the course but in the future ".$this->getHeShe()." must make sure all deadlines are met to ensure that ".$this->getHeShe()." is a successful as possible.";
			return $string;
		}
		
		return " **DEADLINES ERROR** ";
		
	}
	
	
	public function getTheory()
	{
		if($this->theory === 'a')
		{
			$string = " ".$this->name." grasps new concepts quickly and has shown real skill in applying those concepts to ".$this->getHisHer()." practical work. ".$this->getHeShe(true)." is able to compare, explain, justify and discuss all elements of the ICT syllabus accurately and has shown a great skill in being able to synthesise new information to inform ".$this->getHisHer()." reasoning on the impacts and consequences in varying ICT scenarios.";
			return $string;
		}
		
		if($this->theory === 'b')
		{
			$string = " ".$this->name." grasps new concepts quickly and has shown skill in applying those concepts to ".$this->getHisHer()." practical work. ".$this->getHeShe(true)." is able to compare, explain, justify and discuss almost all elements of the ICT syllabus accurately and has shown good skill in being able to synthesise new information to inform ".$this->getHisHer()." reasoning on the impact and consequences in varying ICT scenarios.";
			return $string;
		}
		
		if($this->theory === 'c')
		{
			$string = " ".$this->name." is able to grasp new concepts and has shown some skill in applying those concepts to ".$this->getHisHer()." practical work. ".$this->getHeShe(true)." is able to describe, compare and explain almost elements of the ICT syllabus accurately and has shown some skill in being able to synthesise new information to inform ".$this->getHisHer()." reasoning on the impacts and consequences in varying ICT scenarios.";
			return $string;
		}
		
		if($this->theory === 'd')
		{
			$string = " ".$this->name." is able to grasp some new concepts and has shown some skill in applying those concepts to ".$this->getHisHer()." practical work with some help. ".$this->getHeShe(true)." is able to state, describe, compare and explain some elements of the ICT syllabus accurately and apply them to an ICT scenario.";
			return $string;
		}
		
		if($this->theory === 'e')
		{
			$string = " ".$this->name." struggles with understanding and applying new concepts and should aim to ensure that ".$this->getHeShe()." reviews ".$this->getHisHer()." notes on a regular basis. ".$this->getHeShe(true)." is able to state and describe some elements of the ICT syllabus accurately but struggles applying them to a given scenario.";
			return $string;
		}
		
		if($this->theory === 'u')
		{
			$string = " ".$this->name." struggles with understanding and applying new concepts and should aim to ensure that ".$this->getHeShe()." reviews ".$this->getHisHer()." notes on a regular basis. ".$this->getHeShe(true)." is able to state and describe some elements of the ICT syllabus but struggles applying them to a given scenario.";
			return $string;
		}
		
		return " **THEORY ERROR** ";
	}
	
	public function getPractical()
	{
		if($this->practical === 'a')
		{
			$string = " ".$this->getHisHer(true)." coursework was of a really high standard and demonstrated both an excellent level of practical skill and written communication skills. ".$this->getHeShe(true)." has produced excellent work across all elements of the coursework including the creation of spreadsheets, databases, websites and graphical components. ".$this->name." showed a great ability in being able to use the skills ".$this->getHeShe()." learnt to solve real and complex problems presented in the coursework. ".$this->getHisHer(true)." attention to detail when communicating how ".$this->getHeShe()." had developed a solution was of merit and I was extremely impressed with the work ".$this->getHeShe()." produced.";
			return $string;
		}
		
		if($this->practical === 'b')
		{
			$string = " ".$this->getHisHer(true)." coursework was of a high standard and demonstrated both a high level of practical skill and written communication skills. ".$this->getHeShe(true)." has produced very good work across all elements of the coursework including the creation of spreadsheets, database, websites and graphical components. ".$this->name." showed ability in being able to apply learnt skills to solve most problems presented in the coursework.";
			return $string;
		}
		
		if($this->practical === 'c')
		{
			$string = " ".$this->getHisHer(true)." coursework was of a good standard and demonstrated both a good level of practical skill and written communication skills. ".$this->getHeShe(true)." has produced good work across most elements of the coursework including the creation of spreadsheets, database, websites and graphical components.";
			return $string;
		}
		
		if($this->practical === 'd')
		{
			$string = " ".$this->getHeShe(true)." struggled in some areas of the coursework but was able to use some of ".$this->getHisHer()." learnt skills to produce solutions to most of the coursework elements which covered the creation of spreadsheets, databases, websites and graphical components.";
			return $string;
		}
		
		if($this->practical === 'e')
		{
			$string = " ".$this->getHeShe(true)." struggled in some areas of the coursework finding it difficult to apply learnt skills to different areas of the coursework. ".$this->name." was able to produce some solutions to areas of the coursework which covered the creation of spreadsheets, databases, websites and graphical components.";
			return $string;
		}
		
		if($this->practical === 'u')
		{
			$string = " ".$this->getHeShe(true)." struggled in most areas of the coursework finding it difficult to apply learnt skills to different areas of the coursework. ".$this->name." was able to produce solutions in parts of the coursework which covered the creation of spreadsheets, databases, websites and graphical components.";
			return $string;
		}
		
		return " **PRACTICAL ERROR** ";
	}
	
	public function getIndependant()
	{
		if($this->independant === 'a')
		{
			$string = " ".$this->name." collaborates well with others and is a reliable, competent independent learner. ".$this->getHeShe(true)." has proven that ".$this->getHeShe()." has excellent revision and exam techniques. When working both in out of the classroom it is clear ".$this->getHeShe()." is always focused and dedicated to ".$this->getHisHer()." studies.";
			return $string;
		}
		
		if($this->independant === 'b')
		{
			$string = " ".$this->name." collaborates well with others and is a competent independent learner. ".$this->getHeShe(true)." has proven that ".$this->getHeShe()." has good revision and exam techniques. When working both in out of the classroom it is clear ".$this->getHeShe()." is focused and dedicated to ".$this->getHisHer()." studies.";
			return $string;
		}
		
		if($this->independant === 'c')
		{
			$string = " ".$this->name." collaborates well with others and has demonstrated that ".$this->getHeShe()." is able to study independently in both theory and practical lessons.";
			return $string;
		}
		
		if($this->independant === 'd')
		{
			$string = " ".$this->name." collaborates well with others and has demonstrated that ".$this->getHeShe()." is able to study independently in practical lessons.";
			return $string;
		}
		
		if($this->independant === 'e')
		{
			$string = " With prompting and guidance ".$this->name." is able to work independently in practical and theory lessons. To improve ".$this->getHeShe()." must make sure ".$this->getHeShe()." uses ".$this->getHisHer()." time outside of the classroom as effectively as possible to ensure there and no gaps in ".$this->getHisHer()." knowledge.";
			return $string;
		}
		
		if($this->independant === 'u')
		{
			$string = " ".$this->name." struggles to work independently and must ensure in the future they are productive in and out of the classroom so that ".$this->getHeShe()." can reach his full potential.";
			return $string;
		}
		
		return " **INDEPENDANT ERROR** ";
	}
	
	
	public function getOverall()
	{
		
		if( ($this->theory === 'a' || $this->theory === 'b') && ($this->practical === 'a' || $this->practical === 'b') )
		{
			$string = " Overall ".$this->name." has had a really successful year in ICT in both theory and practical. We feel that ".$this->getHeShe()." has developed ".$this->getHisHer()." practical skills to a really high standard that ".$this->getHeShe()." can easily apply to whatever ".$this->getHeShe()." chooses to do in the future.";
			return $string;
		}
		
		if( ($this->theory === 'b' || $this->theory === 'c') && ($this->practical === 'b' || $this->practical === 'c') )
		{
			$string = " Overall ".$this->name." has had a successful year in ICT in both theory and practical. We feel that ".$this->getHeShe()." has developed ".$this->getHisHer()." practical skills to a good standard that ".$this->getHeShe()." can apply to whatever ".$this->getHeShe()." chooses to do in the future.";

			return $string;
		}
		
		if( ($this->theory === 'd' || $this->theory === 'e') && ($this->practical === 'd' || $this->practical === 'e') )
		{
			$string="";
			return $string;
		}
		
		if( ($this->theory === 'e' || $this->theory === 'u') && ($this->practical === 'e' || $this->practical === 'u') )
		{
			$string="";
			return $string;
		}
		
		
		
		if( ord($this->theory)-ord($this->practical) >= 2 )
		{
			
			
			
			
			if(($this->practical === 'a' || $this->practical === 'b') && ($this->theory === 'c'))
			{
			
			$string = " Overall we feel that ".$this->getHeShe()." has worked extremely well in practical lessons this year demonstrating great skill and understanding across multiple ICT disciplines. ".$this->getHeShe(true)." has also developed ".$this->getHisHer()." theory knowledge to a good standard that ".$this->getHeShe()." can apply across the majority of the specification.";
			return $string;
				
				
			}else if($this->practical === 'a' || $this->practical === 'b')
			{
			
			$string = " Overall we feel that ".$this->getHeShe()." has worked extremely well in practical lessons this year demonstrating great skill and understanding across multiple ICT disciplines. However, ".$this->getHeShe()." should now aim to ensure ".$this->getHeShe()." applies ".$this->getHimselfHerSelf()." equally to the theory side to the course.";
			return $string;
			
			
			
			}else{
			$string = " Overall we feel that ".$this->getHeShe()." has developed ".$this->getHisHer()." practical skills to a good standard that ".$this->getHeShe()." can now apply to different ICT situations but ".$this->getHeShe()." should aim to ensure ".$this->getHeShe()." applies ".$this->getHimselfHerSelf()." equally to the theory side to the course.";

			return $string;
			}
		}
		
		
		
		if( ord($this->practical)-ord($this->theory) >= 2 )
		{	
			if(($this->theory === 'a' || $this->theory === 'b') && ($this->practical === 'c'))
			{
			
			$string = " Overall we feel that ".$this->getHeShe()." has worked extremely well in theory lessons this year demonstrating many of the skills that are needed for a competent ICT A'level student. ".$this->getHeShe(true)." has also developed ".$this->getHisHer()." practical skills to a good standard that ".$this->getHeShe()." can apply to whatever ".$this->getHeShe()." chooses to do in the future.";
			return $string;
				
				
			}else if($this->theory === 'a' || $this->theory === 'b')
			{
			
			$string = " Overall we feel that ".$this->getHeShe()." has worked extremely well in theory lessons this year demonstrating many of the skills that are needed for a competent ICT A'level student. However, ".$this->getHeShe()." should aim to ensure ".$this->getHeShe()." applies ".$this->getHimselfHerSelf()." equally to the practical side to the course.";
			return $string;
			
			
			
			}else{
			$string = " Overall we feel that ".$this->getHeShe()." has developed ".$this->getHisHer()." theory knowledge to a good standard that ".$this->getHeShe()." can now apply to different ICT situations but ".$this->getHeShe()." should aim to ensure ".$this->getHeShe()." applies ".$this->getHimselfHerSelf()." equally to the practical side to the course.";
			return $string;
			}
			
		}
		
		return strcmp($this->theory, $this->practical)." **OVERALL ERROR** Practical: ".$this->practical." Theory: ".$this->theory ;
	}
	
	
	public function getReport()
	{
		$string = $this->getAttitude();
		$string .= $this->getDeadlines();
		$string .= $this->getTheory();
		$string .= $this->getPractical();
		$string .= $this->getIndependant();
		$string .= $this->getOverall();
		
		
		
		
		
		
		
		
		return $string;
		
	}

	
}