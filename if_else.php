<?php
	$year = "5";
	$four=		$year % 4;
	$century=	$year % 100;
	$fourcentury=$year % 400;
	

	if( ( ($four == 0)  && ($century !== 0))  || ($fourcentury == 0)  )
	{

		$printleap = "een schrikkeljaar";
	}	
	else
	{
		$printleap = "geen schrikkeljaar";
	}

?>

<!doctype html>

<html>
<head>

</head>
<body>
	<p><?php echo $year;?> is <?php echo $printleap;?> </p>
</body>


</html>