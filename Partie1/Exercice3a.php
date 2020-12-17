<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3a</title>
</head>
<body>
<?php include('Menuphp1.php'); ?>
    <h1>Exercice 3a : </h1>
    <?php
    $i;
    $tableau = [[
        'Nom'=>"Boucher",
        'Prenom'=>"Louis",
        'Mot de passe'=>"mdp",
    ],
    [
        'Nom'=>"Boucher",
        'Prenom'=>"Louis",
        'Mot de passe'=>"mdp",
    ],
    [
        'Nom'=>"Boucher",
        'Prenom'=>"Louis",
        'Mot de passe'=>"mdp",
    ]];
    for($i=0;$i<3;$i++)
    {
        echo '<p>'.$tableau[$i]['Nom']."\t"
        .$tableau[$i]['Prenom']."\t"
        .$tableau[$i]['Mot de passe']."</td>";
    }
    ?>
    <p><a href="/Boucher/Boucherphp/">Retour</a></p>
    <h1>Code : </h1>
    <?php
    highlight_file(__FILE__)
    ?>
</body>
</html>