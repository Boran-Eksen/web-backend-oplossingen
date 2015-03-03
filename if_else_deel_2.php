<?php
	$second = "221108521";
	$minuten=floor ($second / 60);
	$uren=  floor($minuten / 60);
	$dagen= floor($uren / 24);
	$weken= floor($dagen / 7);
	$maand= floor($dagen / 31);
	$jaar= floor($dagen / 365);

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