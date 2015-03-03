<?php
$pighealth	=	5;
$maxthrows	=	8;

	function calculatiehit()
	{
		$pariteit=false;
		$kans	=	rand (1,5);
	
			if ($kans<=2)
			{
					$pariteit=true;
				}
			return $pariteit;
	}
//$raak=calculatiehit();


		function angrybirds($health,$shots)
		{
			static $array= array();
			//static $throws=0;
				
				if ($shots>0 && $health>0)
				{	$kans=calculatiehit();
					if($kans==true)	
					{
						$shots		=	--$shots;
						$health 	= 	$health - 1;
						$result		=	"Raak, er zijn nog $health varkens over $shots";
						$array[]	= $result	;
						$array[]	=angrybirds($health,$shots);
					}
					else
					{
						$shots		=	--$shots;
						$result		=	"mis, er zijn nog $health varkens over $shots";
						$array[]	= $result	;
						$array[]	=	angrybirds($health,$shots);
					}
				}		
				else
				{
					if($health==0)
					{
						$result		=	"U HEEFT GEWONNEN $shots";
						$array[]	= $result;	}	
					else
					{
						$result		=	"U HEEFT VERLOREN $shots";
						$array[]	= $result	;
					}
				
				}
			return $array;
		}

$result = angrybirds($pighealth,$maxthrows);
var_dump($result)

?>



<!doctype html>

<html>
<head>

</head>
<body>


</body>


</html>