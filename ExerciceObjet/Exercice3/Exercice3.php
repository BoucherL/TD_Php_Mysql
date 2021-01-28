<?php include("Exercice3class.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Exercice 3 objet</title>
</head>
<body>
    <div class="titre">
        <h1>Exercice 3 objet</h1>
    </div>
    <div class="contenu">
    <?php  $perso= new Personnage("Louis");
    echo '<p>'.$perso->afficherPseudo().'</p>';
    echo '<p>'.$perso->afficherVie().'</p>';
    ?>
    </div>
</body>
</html>