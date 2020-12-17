<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8</title>
</head>
<body>
<?php include('Menuphp1.php'); ?>
    <div>
        <h1> Exercice 8</h1>
        <form action="Exercice8.php" method="post">
            "Votre nom :"
            <input type="text" name="champ1">
            <input type="submit" value="OK">
            <input type="submit" value="Reset" name="reset">
</form>
<?php
    if (isset($_POST['champ1']))
    {
        $_SESSION['nom'] = $_POST['champ1'];
        echo 'Nom : ' . $_SESSION['nom'];
    }
    if (isset($_POST['reset']))
    {
        session_unset();
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