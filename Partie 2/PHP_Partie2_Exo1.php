<?php
    include "fonction/fonctiontableau.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice1p2</title>
</head>
<body>
<?php include('Menuphp2.php'); ?>
<h1>Exercice 1 partie 2 php</h1>
    <div>
        <?php
    tableau();
    ?>
    </div>
    <div>
        <?php
            tableau();
        ?>
        <h2>Code source:</h2>
    <div>
        <?php
            highlight_file(__FILE__)
        ?>
    </div>
</body>
</html>