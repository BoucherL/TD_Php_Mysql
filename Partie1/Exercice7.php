<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
</head>
<body>
<?php include('Menuphp1.php'); ?>
    <div>
        <h1> Exercice 7</h1>
        <form action="Exercice7.php" method="post">
            "Votre nom :"
            <input type="text" name="champ1">
            <input type="submit" value="OK">
</form>
<?php
    if (isset($_POST['champ1']))
    {
        $_SESSION['nom'] = $_POST['champ1'];
        echo 'Nom : ' . $_SESSION['nom'];
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