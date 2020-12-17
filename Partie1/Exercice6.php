<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Exercice6.css">
    <title>Exercice 6</title>
</head>
<body>
<div>
<?php include('Menuphp1.php'); ?>
    <h1>Exercice 6</h1>
<form action="" method="get">
<label for="Violet">Texte :</label>
</div>
<div>
<input type="text" id="Violet" name="Violet">
</div>
<div>
    <button type="submit">Envoyer</button>
</div>
</form>
<?php
    if(isset($_GET['Violet'])&&($_GET['Violet'] !="")) 
    {
        $Violet=$_GET['Violet'];
        echo '<h1> Voici votre texte en violet</h1>
        <p class="purple">' .$Violet. '</p>';
        }
        else
        {
        echo "<h1> Veuillez remplir le champ</h1>";
        } 
    ?>
    <div>
    <p><a href="/Boucher/Boucherphp/">Retour</a></p>
        <h1>Code : </h1>
        <?php
        highlight_file(__FILE__)
        ?>
        </div>
</body>
</html>