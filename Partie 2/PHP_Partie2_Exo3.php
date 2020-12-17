<?php 
    include "fonction/fonction3.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Exercice3p2.css">
    <title>Exercice3p2</title>
</head>
<body>
<?php include('Menuphp2.php'); ?>
    <h1>Exercice 3 partie 2 php</h1>
    <table>
        <form action="" method="post">

            Entrer les valeurs:
            <td><input type="number" name="Valeur1" id="Valeur1">
            <input type="number" name="Valeur2" id="Valeur2">
            <input type="number" name="Valeur3" id="Valeur3">
            <button type="submit" name="Valeur">Envoyer</button>
        </form>
    </table>
    <div class="resultat">
        <?php
            if(!isset($_POST['valeur']))
            {
                echo moyenne(
                    array($_POST['Valeur1'],$_POST['Valeur2'],$_POST['Valeur3']));
            }

        ?>
    </div>
    <a href="/Boucher/Boucherphp/">Retour</a>
    <h2>Code :</h2>
    <div>
        <?php
            highlight_file(__FILE__)
        ?>
    </div>
</body>
</html>