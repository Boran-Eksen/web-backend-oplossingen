<?php

$pighealth =	5;
$maximumthrows	=	8;

//		function calculatiehit()
//		{
//			$pariteit=false;
//			$kans	=	rand (1,5);
//		
//				if ($kans==1)
//				{
//					$pariteit=true;
//				}
//			return $pariteit;
//		}
			if($pighealth == 0)
			{
				$resultaat	=	"U Heeft Gewonnen!!";
			}
			else
			{
				function launchangrybird ()
				{
					$throws = 0;
					$maximumthrows	=	8;
					if($throws < $maximumthrows)
					{
						$throws = $throws + 1;
						

								$pariteit=true;
								$kans	=rand (1 , 5);
								
									for ($kans !=1)
										{
											$pariteit=false;
										}
					return $pariteit;

				}
			}
							
$raak=	launchangrybird();

							if($raak = true)
								{
									$pighealth = $pighealth - 1;

									$resultaat	=	"raak!!! Nog maar";
								}
							else
								{
									$resultaat = "miss!! er zijn nog ";
								}

								
						
		}



var_dump($raak)
	

?>


<!doctype html>

<html>
<head>

</head>
<body>

<p><?php echo $resultaat?> <?php echo $pighealth?>varkens over </p>
</body>


</html>