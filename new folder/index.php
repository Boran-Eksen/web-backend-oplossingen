<?php 

	define( 'BASE_URL', 'http://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'PHP_SELF' ] );

	$listArray 	= 	array();
	$cookieSet	= 	false;
	$message	= 1;

	//$toggle		=	'<button title="toggle name="toggleToDo" value="' . $key .'">';
	//$delete		=	'<button title="delete" name="deleteToDo" value="0">';

	if ( !isset( $_COOKIE['authenticated'] ) )
	{
		if (isset( $_POST ['submit'] ) ) 
		{
		
			setcookie( 'authenticated', $listArray, time() + 3600 );
			header( 'location: index.php');
			
		}

	}

	else
	{

		$cookieSet	=	true;

	}

	if(isset( $_POST ['submit'] ))
	{	

		$listArray[] 	= $_POST['todo'];
		$message++;
		

	}
		
			
	

	var_dump($listArray,$cookieSet,$message);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>ToDo</title>
 	<link rel="stylesheet" href="css/style.css">
 </head>
 <body>
 	<div class="container">
 		<h1>Todo List</h1>

 		<?php if ($cookieSet == true): ?>	

 			<div class="todoList">
 				<h3>Still todo!</h3>
 				<p>Good job, all work is done!</p>
 			</div>

 			<div class="done">
 				<h3>All done!</h3>
 				<p>Chop chop, you got work to!</p>
 			</div>

 			<div class="addTodo">

 		<?php else: ?>

 			<p>No work to do or still have to add?</p>

 		<?php endif; ?>
	
 			<h2>Add a Todo</h2>

 			<form action="<?= BASE_URL ?>" method="POST">

 				<ul>
 					<li>
 						<label for="todo">Description</label>
 						<input type="text" name="todo" id="todo">
 					</li>

 					<li class="submitBtn">
 						<input type="submit" name="submit" value="Add to list" id="submit">
 					</li>
 				</ul>
 			</form>

 		</div>
 	</div>
 </body>
 </html>