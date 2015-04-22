<?php

try
{
$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '' );

$dbquery	=	"INSERT INTO brouwers( adres,brnaam, gemeente, omzet,postcode)
					VALUES (:adres, :brnaam, :gemeente, :omzet, :postcode)";

$brouwerstatement= $db-> prepare($dbquery);

if(isset($_POST["adres"]))
{
$brouwerstatement->bindvalue(':adres',$_POST["adres"]);
$brouwerstatement->bindvalue(':brnaam',$_POST["brnaam"]);
$brouwerstatement->bindvalue(':gemeente',$_POST["gemeente"]);
$brouwerstatement->bindvalue(':omzet',$_POST["omzet"]);
$brouwerstatement->bindvalue(':postcode',$_POST["postcode"]);

$done = $brouwerstatement->execute();

if ($done)
{
	$insertid 	= $db->lastinsertid();
	$message	= "De brouwer werd toegevoegd en heeft brouwernummer $insertid";
}
else
{
	$message	= "De ingegeven brouwer kon niet worden toegevoegd, probeer opnieuw!";
}
var_dump($_POST);
}
}

catch (PDOexception $e)
{
	$message = "de conectie is niet gelukt";
}
?>
<!doctype>
<html>
<head>
	<title>crud insert</title>
</head>
<body>
	<?php if (isset($message)): ?>
		<?= $message?>
	<?php endif ?>
	
	<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
		
		<ul>
			<li>
				<label for="brnaam">Brouwernaam</label>
				<input type="text" name="brnaam" id="brnaam">
			</li>
			<li>
				<label for="adres">Adres</label>
				<input type="text" name="adres" id="adres">
			</li>
			<li>
				<label for="postcode">Postcode</label>
				<input type="text" name="postcode" id="postcode">
			</li>
			<li>
				<label for="gemeente">Gemeente</label>
				<input type="text" name="gemeente" id="gemeente">
			</li>
			<li>
				<label for="omzet">Omzet</label>
				<input type="text" name="omzet" id="omzet">
			</li>
		</ul>
		
		<input type="submit" value="Voeg toe" name="submit">
	</form>

</body>
</html>