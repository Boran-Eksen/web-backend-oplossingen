<?php
$som	=	100000;
$rente	=	8;
$jaar	=	10;
$array 	=	(	"som" 	=> 100000, 
				"rente" =>	8,
				"jaar"	=>	10,
				"counter"=> 1,
				"dump"	=>	array())
function renteberekening ($array)
{	$winst		=	$array[som]	*$array[rente]/100;
	$currentsom	=	$array[som] + $winst;
	$arraydump[]	=	'na '.$array[counter].' jaar heb je '.$currentsom.' euro op je rekening.En je intrest dit jaar is '.$winst.'';
	$array[dump]	=$arraydump
	if ($array[jaar] > $array[counter])
	{
		$array[counter]		= 	$array[counter] ++1;
		renteberekening($currentsom,$rente,$jaar);
	}
	return $arraydump;
}
$current = renteberekening($som,$rente,$jaar);
var_dump($current)
?>



<!doctype html>

<html>
<head>

</head>
<body>


</body>


</html>