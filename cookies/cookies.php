<?php
$login		=	file_get_contents("text.txt");
$loginarray	=	explode(",",$login);
var_dump($loginarray)
?>
<html>
<head>

</head>
<body>
 

	 <form>
                        <ul>
                            <li>
                                <label for="gebruikersnaam">gebruikersnaam</label>
                                <input type="text" id="gebruikersnaam" name="username">
                            </li>
                            <li>
                                <label for="paswoord">paswoord</label>
                                <input type="text" id="paswoord" name="password">
                            </li>
                        </ul>
                        <input type="submit" name="submit">
 	 </form>

</body>


</html>