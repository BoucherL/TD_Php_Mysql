<?php
    include "fonction/tableau2.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice2p2</title>
</head>
<body>
<?php include('Menuphp2.php'); ?>
    <h1>Exercice 2 partie 2 php</h1>
    <div>
        <?php
            tableau2("titre1","titre2","titre3");
    ?>
    </div>
    <a href="/Boucher/Boucherphp/">Retour</a>
    <h2>Code source:</h2>
    <div>
        <?php
            highlight_file(__FILE__)
        ?>
    </div>
    
</body>
</html>