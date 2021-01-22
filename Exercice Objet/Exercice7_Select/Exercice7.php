<?php include "Exercice7class.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7 objet  (objet PDO Select ALL)</title>
</head>
<body>
    <div class="titre">
        <h1>Exercice 7 objet  (objet PDO Select ALL)</h1>
    </div>
    <div class="contenu">
        <?php
            $tableau = Array();
            $BDD = new PDO('mysql:host=192.168.65.206; dbname=Louis-objet;charset=utf8','root','root');
            $requete = $BDD->query("SELECT * FROM Personnage");
            
            While($user = $requete->fetch()){
                array_push($tableau,new Personnage($user));
            }
        ?>
        <table>
        <?php
        foreach ($tableau as $key) {
        $key->afficherInfoPersonnage();
            }
        ?>
        </table>
    </div>
    
</body>
</html>