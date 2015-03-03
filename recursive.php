<?php
$som	=	100000;
$rente	=	8;
$jaar	=	10;

function renteberekening ($som, $rente,$jaar)
{	static $counter	=	1;
	static $arraydump= array();
	$winst		=	$som*$rente/100;
	$currentsom	=	$som + $winst;
	$arraydump[]	=	'na '.$counter.' jaar heb je '.$currentsom.' euro op je rekening.En je intrest dit jaar is '.$winst.'';

	if ($jaar > $counter)
	{
		$counter		= 	++$counter;
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
<style>
		body
		{
			font-family:"Segoe UI";
			color:#423f37;
		}

		.container
		{
			width:	1024px;
			margin:	0 auto;
		}

		img
		{
			max-width: 100%;
		}

		.multiple
		{
			float:left;
			width:288px;
			margin:16px;
			padding:16px;
			box-sizing:border-box;
			background-color:#EEEEEE;
		}

		.multiple:nth-child(3n+1)
		{
			margin-left:0px;
		}

		.multiple:nth-child(3n)
		{
			margin-right:0px;
		}

		.single img
		{
			float:right;
			margin-left: 16px;
		}


	</style>
</head>
<body>
<div class="container">
	<p>joe de mande</p>
</div>

</body>


</html>