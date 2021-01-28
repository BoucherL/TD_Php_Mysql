<?php include "Exerciceclass7.2.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7 objet (objet PDO Insert)</title>
</head>
<body>
    <div class="titre">
        <h1>Exercice 7 objet (objet PDO Insert)</h1>
    </div>
    <div class="contenu">
    <!--formulaire inserer dans la bdd Pseudo et vie -->
    <form action="" method="get">
    <label for="Pseudo">Pseudo </label>
    <input type="text" name="Pseudo" id="Pseudo">
    <label for="Vie">Vie </label>
    <input type="text" name="Vie" id="Vie">
    <input type="submit" value="Envoyer" name="Submit">
    </form>
        <?php
            $BDD = new PDO('mysql:host=192.168.65.206; dbname=Louis-objet;charset=utf8','root','root');
            if(isset($_GET["Submit"])) {
                if(isset($_GET["Pseudo"]) && isset($_GET["Vie"])) {
                    $Perso = new Personnage($BDD);
                    $Perso->InsererPerso();
                }
            }
        ?>
    </div>
    
</body>
</html>