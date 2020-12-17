<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercie 2.2</title>
</head>
<body>
<?php include('Menuphp1.php'); ?>
    <h1>Exercice 2.2 : </h1>
    <?php
        $tableau = array(
            "Nom"=>" Boucher",
            "Prenom" => "Louis",
            "mot de passe" => "random"
        );
        echo "information: ".$tableau['Nom']." " .$tableau['Prenom']." " .$tableau['mot de passe']. " ";
    ?>
    <p><a href="/Boucher/Boucherphp/">Retour</a></p>
    <div>
        <h1>Code : </h1>
    <?php
        highlight_file(__FILE__)
    ?>
    </div>
</body>
</html>