<?php 
	session_start();


	if(isset($_POST['Clear'])){
		session_destroy();
		Header('Location: '.$_SERVER['PHP_SELF']);
		Exit();

	}

	//$array= array();
	//$list = array();
	//$post =$_POST['description'];
	if (isset( $_POST ['submit']))
	{
		if ($_POST['description'] == '' )
		{
		$error =	'Vult aub iets in';
		}
		else
		{

			$_SESSION ["todos"][] =$_POST['description'];
		}
	}
	//var_dump($_POST )
//var_dump($_SESSION)
	//function todo($session)
	//foreach ($session ["todos"] as $key => $value) {
	//	if ($value[2]==1)
	//{
	//	$todo[]=$value[1]
	//}
	//}
	//endforeach
	//var_dump($todo)
	

	if (isset($_POST['deleteTodo']))
	{
		$integer=intval($_POST['deleteTodo']);
		unset($_SESSION["todos"][$integer]);
	}
	
	if (isset($_POST["toggleTodo"]))
	{
		$integer=intval($_POST['toggleTodo']);
		$_SESSION ["done"][]=$_SESSION["todos"][$integer];
		unset($_SESSION["todos"][$integer]);
	}

	if (isset($_POST['deleteDone']))
	{
		$integer=intval($_POST['deleteDone']);
		unset($_SESSION["done"][$integer]);
	}
	
	if (isset($_POST["toggleDone"]))
	{
		$integer=intval($_POST['toggleDone']);
		$_SESSION["todos"][]=$_SESSION ["done"][$integer];
		unset($_SESSION ["done"][$integer]);
	}
	$Done=null;
	$Todo=null;
	if(isset($_SESSION ["todos"]))
	{
		$Todo=$_SESSION ["todos"];
	}
	if(isset($_SESSION ["done"]))
	{
		$Done=$_SESSION ["done"];
	}
	//var_dump($_POST,$_SESSION)
var_dump($_SESSION,$_POST)
 ?>
 <!doctype html>
 <html>
 <head>
 	<link rel="stylesheet" href="css/styles.css">
 	<title>Examen</title>
 </head>
 <body>
 <h1>Examen php:To Do List</h1>
 	
 	<?php if (isset($error)): ?>
 		<?php  echo $error ?>
 	<?php endif ?>


 	<?php if ($Todo==null && $Done==null ): ?>
 		<p>U HEBT NOG GEEN TAKEN INGEVULD!!!</p>
 	<?php else: ?>
 
 	<h1> To Do</h1>
 	

 <ul>
 	
		 <?php if (array_key_exists("todos",$_SESSION)): ?>
		 		
		 	
		 	<?php if ($Todo==null): ?>
		 		
		 		<li>Voer een taak in!!</li>
		 	
		 	

			<?php else: ?>
			

				<?php foreach ($_SESSION ["todos"] as $key => $value): ?>
					<li>
						<form action="index.php" method="POST">
							<label></label><button class="green"  title="Status wijzigen" name="toggleTodo" value="<?php echo $key ?>" class="status not-done"></button>
							<label><?php echo $value ?></label><button class="red"  title="Verwijderen" name="deleteTodo" value="<?php echo $key ?>">Verwijder</button>
						</form>
					</li>
			
				<?php endforeach ?>
			<?php endif ?>
		<?php endif ?>

		<?php if (array_key_exists("todos",$_SESSION)==false): ?>

			<li>Voer een taak in!!</li>
		<?php endif ?>

 </ul>


<h1>Done</h1>
  

  	<ul>
  			<?php if (array_key_exists("done",$_SESSION)): ?>
  				
  				<?php if ($Done==null): ?>
  					<li>Luierik BEGINT ERAAN!!!</li>
  				
  				
  				<?php else: ?>
  					
  				
					<?php foreach ($_SESSION ["done"] as $key => $value): ?>
						<li>
							<form action="index.php" method="POST">
								<button class="green" title="Status wijzigen" name="toggleDone" value="<?php echo $key ?>" class="status not-done"></button>
								<label><?php echo $value ?></label><button class="red" title="Verwijderen" name="deleteDone" value="<?php echo $key ?>">Verwijder</button>
							</form>
						</li>
				
					<?php endforeach ?>
				<?php endif ?>
			<?php endif ?>

			<?php if (array_key_exists("done",$_SESSION)==false): ?>

				<li>Luierik BEGINT ERAAN!!!</li>
				
			<?php endif ?>	
 	<?php endif ?>
 	</ul>

<form method="POST" action="index.php">

			<ul>
				<li>
					<label for="description">Beschrijving: </label>
					<input id="description" name="description" type="text">
				</li>
			</ul>

			<input name="submit" value="Toevoegen" type="submit">
			<input name="Clear" value="Clear"	type="submit">




		
</form>
 </body>
 </html>