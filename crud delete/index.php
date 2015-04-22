<?php

try
{
$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '' );

if (isset($_POST[ 'delete' ]) )
{
	$confirm	=	true;
	$deletenr	=	$_POST[ 'delete' ];
}
if (isset($_POST["confirm"]))
	{
		
			$deletequery	=	"DELETE FROM brouwers
								WHERE brouwernr = :brouwernr";

			$deletestatement	= 	$db->prepare( $deletequery );
			
			$deletestatement->bindValue(':brouwernr', $_POST["confirm"]);
			
			$isdeleted	=	$deletestatement->execute();
			
			var_dump($isdeleted);
		}

$brouwerquery	=	"SELECT * 
						FROM brouwers";
$brouwerstatement= $db->prepare($brouwerquery);
$brouwerstatement->execute();

$brouwers 	= array();
while($row = $brouwerstatement->fetch(pdo::FETCH_ASSOC))
{
	$brouwers[]	=	$row;
}	

$columnames	=	array();

foreach ($brouwers[0] as $key => $value) {
	$columnames[]	=	$key;
}
$columnames[]	=	'';



//var_dump($_POST,$_POST["confirm"]);
}
catch (PDOexception $e)
{
	$message = "de conectie is niet gelukt";
}
?>

<html>
<head>
	<title>crud delete</title>
<style type="text/css">

.delete{
    width: 16px;
    height: 16px;
    background: url("icon-delete.png") ;
    border: medium none;
background-color: transparent;
cursor: pointer;
text-indent: -1000px;
}
.even{
	background-color: lightgrey;
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
th{
	border: 1px solid #D3D3D3;
}
</style>
</head>
<body>
<?php if (isset($confirm)): ?>
	<p>Weet u zeker dat u deze brouwer wilt verwijderen?</p>
	<form action:"<?= $_SERVER['PHP_SELF'] ?>" method="POST">

		<button type="submit" name="confirm" value="<?= $deletenr ?>">
					Absoluut zeker!
				</button>

				<button type="submit">
					Ongedaan maken
				</button>
		
	</form>
	
<?php endif ?>
<table>
<thead>
	<?php foreach ($columnames as $key => $columname): ?>
		<th><?= $columname?></th>
	<?php endforeach ?>

</thead>
<tbody>
	
		<?php foreach ($brouwers as $key => $brouwer): ?>
			<tr <?php if ($key %2==0): ?>
				class="even"
			<?php endif ?>>
				<?php foreach ($brouwer as $key => $value): ?>
					<td><?= $value?></td>
					
				<?php endforeach ?>
				<td><form action:"<?= $_SERVER['PHP_SELF'] ?>" method="POST">
						<input class="delete" type="submit" name="delete" value="<?= $brouwer['brouwernr'] ?>">
			</tr>
		<?php endforeach ?>
	
</tbody>
</table>
</body>
</html>