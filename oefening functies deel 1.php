<?php

	function optelling($getal1,$getal2)
		{
			$berekening = $getal1 + $getal2;
				return $berekening;
		}
	
	function vermenigvuldiging($getal1,$getal2)
		{
			$berekening= $getal1 * $getal2;
				return $berekening;
		}

	function isEven($getal)
		{	$pariteit	=true;
				
				if ( $getal%2 > 0 )
				{
					$pariteit= false;
				}

		return $pariteit;
		}
$som		=	optelling( 1, 5);
$product	=	vermenigvuldiging(6,7);
$Even     	=	isEven(2);

	if($Even==1)
	{
		$isEven = "Dit getal is even.";
	}
	else
	{
		$isEven=	"Dit getal is oneven.";
	}
?>



<!doctype html>

<html>
<head>

</head>
<body>

<p><?php echo $som ?></p>
<p><?php echo $product ?></p>
<p><?php echo $isEven ?></p>
</body>


</html>