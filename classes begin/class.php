<?php 

class percent{

	public $absolute;	
	public $relative;
	public $hundred;
	public $nominal;

	public function __construct($new ,$unit){

	$this->absolute 			=	$this->formatnumber($new / $number)
	$this->relative 			=	$this->formatnumber($absolute - 1)
	$this->hundred				=	$this->formatnumber($absolute * 100)
	$this->nominal				= "status quo"

		if ($this->absolute >1)
		{
			$this->nominal ="positive"
		}
		elseif($this->absolute<1)
		{
			$this->nominal ="negative"
		}
		public function formatnumber($number)
		{

			return number_format($number, "2",",",".")
		}
	}


}


 ?>