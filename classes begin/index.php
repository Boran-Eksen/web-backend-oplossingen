<?php

	function __autoload( $className ) {
	    include $className . '.php';
	}
	$unit	=60;
	$new	=100;
	$test= new Percent( $new , $unit )
?>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		

		<table>
	<caption>Hoeveel procent is <?php echo $new ?> van <?php echo $unit ?>?</caption>
	<tr>
		<td>Absoluut</td>
		<td><?php echo $test->absolute ?></td>
	</tr>
	<tr>
		<td>Relatief</td>
		<td><?php echo $test->relative ?></td>
	</tr>
	<tr>
		<td>Geheel getal</td>
		<td><?php echo $test->hundred ?>%</td>
	</tr>
	<tr>
		<td>Nominaal</td>
		<td><?php echo $test->nominal ?></td>
	</tr>
</table>
	
	</body>
	</html>

