<?php include("Exercice6class.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 objet</title>
</head>
<body>
    <div class="titre">
        <h1>Exercice 6 objet</h1>
    </div>
    <div class="contenu">
    <?php
    $perso1 = new Personnage(1);
    $perso3 = new Personnage(3);      

    $perso1->PseudoetVie();
    $perso1->attaquer($perso3);
    $perso3->PseudoetVie();
    $perso3->soin();
    $perso3->PseudoetVie();
    ?>
    </div>
</body>
</html>