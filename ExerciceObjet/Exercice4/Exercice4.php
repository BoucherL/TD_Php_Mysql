<?php include('Exercice4class.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 objet</title>
</head>
<body>
    <div class="titre">
    <h1>Exercice 4 objet</h1>
    </div>
    <div class="contenu">

    <?php
    $perso1 = new Personnage("louis", 20);
    $perso2 = new Personnage("kiki", 2);

    $perso1->afficherPseudo();
    $perso1->afficherVie();
    $perso2->afficherPseudo();
    

    // Combat !

    $perso1->attaquer($perso2);
    $perso2->displayVieRestante();
    $perso1->attaquer($perso2);
    $perso2->displayVieRestante();
    ?>
    </div>
</body>
</html>