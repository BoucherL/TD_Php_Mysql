<?php include ("Exercice5class.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 objet</title>
</head>
<body>
    <div class="titre">
        <h1>Exercice 5 objet</h1>
    </div>
    <div class="contenu">
    <?php
    $perso1 = new Personnage('2');
    $perso2 = new Personnage('4');
    $perso3 = new Personnage('10');

    $perso1->afficherPseudo();
    $perso1->afficherVie();
    
    $perso2->afficherPseudo();
    $perso2->afficherVie();

    $perso3->afficherPseudo();
    $perso3->afficherVie();
    ?>
    </div>
    
</body>
</html>