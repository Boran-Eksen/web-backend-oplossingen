<?php

try
{
$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '' );
	
$queryString	=			'SELECT *
							FROM bieren 
							INNER JOIN brouwers
							ON bieren.brouwernr = brouwers.brouwernr
							WHERE bieren.naam LIKE "Du%"
							AND brouwers.brnaam LIKE "%a%"';

$statement = $db->prepare( $queryString );

$statement->execute( );

$bieren	=	array();

	while($row = $statement->fetch(PDO:: FETCH_ASSOC))
	 {
		$bieren[] 	=	$row;
	}
	$columnames = array();
	$columnames[] = "#";

	foreach ($bieren[0] as $key => $bier) {
		
		$columnames[]	=	$key;
	}
	//var_dump($bieren,$columnames)
}
catch (PDOexception $e)
{
	$message = "de conectie is niet gelukt";
}
?>
<html>
<head>
	<title>oplossing crud</title>
<style type="text/css">

.even
			{
				background-color:lightgrey;
			}
tr:hover {
    background-color: blue;
}
</style>
</head>
<body>
<table>
<thead>

<?php if (isset($message)): ?>
	<p><?= $message ?></p>
<?php else: ?>


<?php foreach ($columnames as $columname): ?>
	<th><?= $columname?></th>
<?php endforeach ?>


</thead>

<tbody>
 <?php foreach ($bieren as $key =>	$bier): ?>
		<tr class="<?= ( ( $key + 1) %2 == 0 ) ? 'even' : '' ?>">
					<td><?= ($key + 1) ?></td>
		<?php foreach ($bieren[$key] as $bier): ?>
		<td><?= $bier ?></td>
		<?php endforeach ?>
	</tr>
<?php endforeach ?>
<?php endif ?>

</tbody>
</table>
</body>
</html>

