<?php


		class Percent{

			public $absolute;
			public $relative;
			public $hundred;
			public $nominal;

			public function __construct($new,$unit)
			{
				$this->absolute = $this->formatnumber($new/$unit) ;
				$this->relative = $this->formatnumber($this->absolute-1);
				$this->hundred 	= $this->formatnumber($this->relative*100);
				$this->nominal	=	"status - quo";

				if($this->absolute >1)
				{
					$this ->nominal = "positive";
				}

				if($this->absolute <1)
				{
					$this ->nominal = "negative";
				}
			}
				public function formatNumber( $number )
				{
					return number_format($number, 2, '.', ' ');
				}
					

			}
		
?>