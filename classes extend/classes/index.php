<?php

	function __autoload( $ClassName )
	{
		require_once( $ClassName . '.php' );	
	}

	$lion = new Animal("lion","man",250);
	$kat = new Animal("kat","man",50);
	$wolf = new Animal("wolf","vrouw",150);

	$kat-> changehealth(20);

	$simba = new Lion("Simba","man",200,"disney lion");
	$mufasa= new Lion("Mufasa","man",180,"douchebag");

	$zebra = new Lion("Zebra","man",200,"Striped");
	$zevra= new Lion("Zevra","vrouw",180,"zwart");


	
?>
	<html>
	<head>
		<title></title>
	</head>
	<body>


		<p><?php echo $lion->getname() ?> is een <?php echo $lion->getgender() ?> en heeft  <?php echo $lion->getHealth() ?> levenspunten</p>

		<p><?php echo $kat->getname() ?> is een <?php echo $kat->getgender() ?> en heeft  <?php echo $kat->getHealth() ?> levenspunten</p>

		<p><?php echo $wolf->getname() ?> is eent <?php echo $wolf->getgender() ?> en heeft <?php echo $wolf->getHealth() ?> levenspunten</p>

		<p>De speciale move van <?php echo $simba->getname() ?> van het soort <?php echo $simba->getspecies() ?> is <?php echo $simba->specialmove() ?></p>
		
		<p>De speciale move van <?php echo $mufasa->getname() ?> van het soort <?php echo $mufasa->getspecies() ?> is <?php echo $mufasa->specialmove() ?></p>

		<p>De speciale move van <?php echo $zebra->getname() ?> van het soort <?php echo $zebra->getspecies() ?> is <?php echo $zebra->specialmove() ?></p>

		<p>De speciale move van <?php echo $zevra->getname() ?> van het soort <?php echo $zevra->getspecies() ?> is <?php echo $zevra->specialmove() ?></p>
	</body>
	</html>

