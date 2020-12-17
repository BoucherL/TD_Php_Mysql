<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice2 TD4 BDD</title>
</head>
<body>
<?php include('MenuTD4.php'); ?>
    <h1>Exercice2</h1>
    <?php

     try{
        $MaBase = new PDO('mysql:host=192.168.65.206; dbname=louis_exo2;charset=utf8','root','root');

        $objetresultat = $MaBase->query("SELECT * FROM `Medecin`");
        
        while($TableauDunTuple = $objetresultat->fetch()){
            echo "<p>".$TableauDunTuple["matricule"]." ".$TableauDunTuple["nom"]." ".$TableauDunTuple["prenom"]."</p>";
};
}catch(Exception $e){
echo "Pas de résultat:".$e->getMessage();
}
highlight_file(__FILE__);
    ?>
</body>
</html>