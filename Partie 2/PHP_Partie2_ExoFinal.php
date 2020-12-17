<?php
    include "fonction/fonctionFinal.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicefinal</title>
</head>
<body>
<?php include('Menuphp2.php'); ?>
    <h1>Exercice final p2 php</h1>
    <?php
            if (sessionLog() === "ok") {
                echo "correct Mot de passe";
                echo '<a href=""page secrete>';
            }else{
                echo "Mauvais mot de passe";
            } 
        ?>  
        <a href="/Boucher/Boucherphp/">Retour</a>
    <div>

        <?php
            highlight_file(__FILE__)
        ?>
    </div>
</body>
</html>