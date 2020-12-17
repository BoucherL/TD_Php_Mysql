<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Exercice1.css">
    <title>Exercice 1 php</title>
</head>
<body>
<?php include('Menuphp1.php'); ?>
    <?php 
        $NombreAleatoire = rand ( 0 , 100 );    //initalisation variable

        if($NombreAleatoire%2 == 1)         // test nombre aléatoire
        {
            echo '<div class="impair">le nombre '.$NombreAleatoire.' est impair</div>';
        }
        else
        {
            echo '<div class="pair">le nombre '.$NombreAleatoire.' est pair</div>';
        }
        
        highlight_file(__FILE__)

    ?>
    <p><a href="/Boucher/Boucherphp/">Retour</a></p>
</body>
</html>