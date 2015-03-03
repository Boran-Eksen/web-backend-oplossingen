<?php

$artikels   = array( array( "titel" =>  "Noorse F-16 kan Russische MiG maar nipt ontwijken", 
                    "datum" => "3/12/14",
                    "inhoud" => "Het Noorse ministerie van Defensie heeft beelden vrijgegeven waarop te zien is hoe een F-16 van de Noorse luchtmacht een close encounter heeft met een Russische MiG.
 
Het gedrag van de Russische piloot kan je niet echt normaal noemen
Brynjar Stordal, woordvoerder Noorse leger
De piloot van de F-16 moest een bruusk manoeuvre uitvoeren om het Russische gevechtsvliegtuig te ontwijken. Volgens defensiespecialisten waren beide toestellen wellicht maar zo'n twintig meter van elkaar verwijderd. 

Het gedrag van de Russische piloot kan je niet echt normaal noemen, verklaarde Brynjar Stordal, woordvoerder van het Noorse leger. We weten niet of het om een misrekening ging of om een doelbewuste actie. De Noren hebben aan de Russen laten weten dat dergelijk incident niet op prijs wordt gesteld.

De bijna-botsing vond plaats in het internationale luchtruim ergens ten noorden van Noorwegen maar het Noorse leger wil de exacte locatie niet verklappen. 

Het voorval legt ook de gespannen verhouding bloot tussen de NAVO-lidstaten en Rusland. Dit jaar heeft de NAVO al drie keer zo vaak Russische vliegtuigen onderschept in het Europees luchtruim dan vorig jaar. Die Russische agressie begint te irriteren.",
                    
                    "afbeelding" => "afbeelding-1.jpg",
                    "afbeeldingsbeschrijving"   => "vliegtuigszicht"
                     ),
         array( "titel" =>  "Noorse F-16 kan Russische MiG maar nipt ontwijken 2", 
                    "datum" => "3/12/14",
                    "inhoud" => "Het Noorse ministerie van Defensie heeft beelden vrijgegeven waarop te zien is hoe een F-16 van de Noorse luchtmacht een close encounter heeft met een Russische MiG.
 
Het gedrag van de Russische piloot kan je niet echt normaal noemen
Brynjar Stordal, woordvoerder Noorse leger
De piloot van de F-16 moest een bruusk manoeuvre uitvoeren om het Russische gevechtsvliegtuig te ontwijken. Volgens defensiespecialisten waren beide toestellen wellicht maar zo'n twintig meter van elkaar verwijderd. 

Het gedrag van de Russische piloot kan je niet echt normaal noemen, verklaarde Brynjar Stordal, woordvoerder van het Noorse leger. We weten niet of het om een misrekening ging of om een doelbewuste actie. De Noren hebben aan de Russen laten weten dat dergelijk incident niet op prijs wordt gesteld.

De bijna-botsing vond plaats in het internationale luchtruim ergens ten noorden van Noorwegen maar het Noorse leger wil de exacte locatie niet verklappen. 

Het voorval legt ook de gespannen verhouding bloot tussen de NAVO-lidstaten en Rusland. Dit jaar heeft de NAVO al drie keer zo vaak Russische vliegtuigen onderschept in het Europees luchtruim dan vorig jaar. Die Russische agressie begint te irriteren.",
                    
                    "afbeelding" => "afbeelding-1.jpg",
                    "afbeeldingsbeschrijving"   => "vliegtuigszicht"
                     ),
array( "titel" =>  "Noorse F-16 kan Russische MiG maar nipt ontwijken 3", 
                    "datum" => "3/12/14",
                    "inhoud" => "Het Noorse ministerie van Defensie heeft beelden vrijgegeven waarop te zien is hoe een F-16 van de Noorse luchtmacht een close encounter heeft met een Russische MiG.
 
Het gedrag van de Russische piloot kan je niet echt normaal noemen
Brynjar Stordal, woordvoerder Noorse leger
De piloot van de F-16 moest een bruusk manoeuvre uitvoeren om het Russische gevechtsvliegtuig te ontwijken. Volgens defensiespecialisten waren beide toestellen wellicht maar zo'n twintig meter van elkaar verwijderd. 

Het gedrag van de Russische piloot kan je niet echt normaal noemen, verklaarde Brynjar Stordal, woordvoerder van het Noorse leger. We weten niet of het om een misrekening ging of om een doelbewuste actie. De Noren hebben aan de Russen laten weten dat dergelijk incident niet op prijs wordt gesteld.

De bijna-botsing vond plaats in het internationale luchtruim ergens ten noorden van Noorwegen maar het Noorse leger wil de exacte locatie niet verklappen. 

Het voorval legt ook de gespannen verhouding bloot tussen de NAVO-lidstaten en Rusland. Dit jaar heeft de NAVO al drie keer zo vaak Russische vliegtuigen onderschept in het Europees luchtruim dan vorig jaar. Die Russische agressie begint te irriteren.",
                    
                    "afbeelding" => "afbeelding-1.jpg",
                    "afbeeldingsbeschrijving"   => "vliegtuigszicht"
                     )
                    );  
$opvraging=false;
$artikelbestaat=false;
    if (isset ($_GET['id']))
    {
       $id=$_GET['id'];

        if (array_key_exists($id, $artikels))
        {
        $artikelbestaat=true;
        }
        else
        {
            $opvraging=true;
        }
    }

?>

<!doctype html>

<html>
<head>

<h1>De krant van vandaag</h1>
<style>
    
        .artikel
        {
            width:100%;
        }
        .container
        {
            width:  300px;
            margin: 0 auto;
            background-color:#56F1FF;
            padding:16px;
            margin:16px;
        }

        img
        {
            max-width: 100%;
        }


    </style>
</head>
<body>
       
    <?php if($opvraging==false):?>
        <?php if($artikelbestaat==false): ?> 
            <?php foreach ($artikels as $id     =>  $artikel ): ?>   
                <div class="container">
                    <h1><?php echo $artikel['titel']?></h1>   
                    <p><?php echo $artikel['datum'] ?></p>
                    <p><img src="afbeeldingen/<?php echo $artikel['afbeelding'] ?>" alt="<?php echo $artikel['afbeeldingsbeschrijving'] ?>"></p>
                    <p><?php echo str_replace ( "\r\n", "</p><p>", substr( $artikel['inhoud'], 0, 50 ) )?>...</p>
                    <a href="opdracht-get.php?id=<?php echo $id ?>">Lees meer</a>
                </div>
            <?php endforeach ?>
         <?php else: ?>
            <div class="artikel">
                <h1><?php echo $artikels[$_GET['id']]['titel']?></h1>   
                <p><?php echo $artikels[$_GET['id']]['datum'] ?></p>
                <p><img src="afbeeldingen/<?php echo $artikels[$_GET['id']]['afbeelding'] ?>" alt="<?php echo $artikels[$_GET['id']]['afbeeldingsbeschrijving'] ?>"></p>
                <p><?php echo $artikels[$_GET['id']]['inhoud']?></p>
                <a href='opdracht-get.php'>keer terug naar overzicht </a>
            </div>
        <?php endif ?>
    <?php else:?>
    <p> Deze artikel word nie gevonden </p>
<?php endif ?>










    </div>


</body>


</html>