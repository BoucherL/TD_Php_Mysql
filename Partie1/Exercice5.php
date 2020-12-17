<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Exercice5.css">
    <title>Exercice 5</title>
</head>
<body>
<?php include('Menuphp1.php'); ?>
    <div>
    <h1>Exercice 5</h1>
<form action="" method="post">
<label for="Rouge">Texte :</label>
</div>
<div>
<input type="text" id="Rouge" name="Rouge">
</div>
<div>
    <button type="submit">Envoyer</button>
</div>
</form>
<?php
    if(isset($_POST['Rouge'])&&($_POST['Rouge'] !="")) 
    {
        $Rouge=$_POST['Rouge'];
        echo '<h1> Voici votre texte en rouge</h1>
        <p class="red">' .$Rouge. '</p>';
        }
        else
        {
        echo "<h1> Veuillez remplir le champ</h1>";
        } 
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