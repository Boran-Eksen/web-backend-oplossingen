<?php

try
{
$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '' );
	
$queryString	=			"SELECT brouwernr,brnaam
								FROM brouwers";
$brouwersstatement = $db->prepare($queryString);
$brouwersstatement-> execute();

$brouwers = array();

while ($row= $brouwersstatement->fetch(pdo::FETCH_ASSOC))
{
	$brouwers[] =	$row;
}
$bieren = array();
if (isset($_GET['brouwernr']))
{
	$geselecteerdebrouwer = $_GET['brouwernr'];
	$geselecteerdequery =		"SELECT naam
									FROM bieren
									WHERE bieren.brouwernr like $geselecteerdebrouwer";
	$bierenstatement = $db->prepare($geselecteerdequery);
	$bierenstatement->execute();


while($row = $bierenstatement->fetch(pdo::FETCH_ASSOC))
{
	$bieren[] = $row;
}

}
//var_dump($brouwers);
}


catch (PDOexception $e)
{
	$message = "de conectie is niet gelukt";
}
?>


<!doctype>
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
table {
    margin: 12px 0px;
    border: 1px solid #D3D3D3;
    border-collapse: collapse;
}
tr{
	border: 1px solid #D3D3D3;
    border-collapse: collapse;
}
td{
	border: 1px solid #D3D3D3;
}

</style>
</head>
<body>
	<form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET">

		<select name="brouwernr">
		<?php foreach ($brouwers as $key => $brouwer): ?>
		<option  value="<?= $brouwer["brouwernr"] ?>" ><?= $brouwer["brnaam"] ?></option>
			
		<?php endforeach ?>
		</select>
		<input type="submit" value="geef mij alle bieren van deze brouwerij">
	</form>
	<?php if (isset($_GET['brouwernr'])): ?>
		
	
	<table>
		<thead>
			<?php foreach ($brouwers[0] as $key => $brouwer): ?>
				<th><?= $key ?></th>
			<?php endforeach ?>
		</thead>
		<?php foreach ($bieren as $key => $bier): ?>
			<tr <?php if ($key %2 ==0): ?>
				class="even"
			<?php endif ?>>
				<td><?=$key?></td>
				<td><?=$bier["naam"]?></td>

			</tr>
		<?php endforeach ?>
	</table>
<?php endif ?>

</body>
</html>

