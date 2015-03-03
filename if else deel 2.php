<?php
	$second = "221108521";
	$minuten= float $second / 60;
	$uren= float $minuten / 60;
	$dagen= $uren / 24;
	$weken= $dagen / 7;
	$maand= $dagen / 31;
	$jaar= $dagen / 365;

?>

<!doctype html>

<html>
<head>

</head>
<body>
<ul>
	<li> seconden: <?php echo $second;?></li>
	<li> minuten: <?php echo $minuten;?></li>
	<li> uren: <?php echo $uren;?></li>
	<li> dagen: <?php echo $dagen;?></li>
	<li> weken: <?php echo $weken;?></li>
	<li> maanden: <?php echo $maand;?></li>
	<li> jaren: <?php echo $jaar;?></li>

</ul>
</body>


</html>