<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2.1_b php</title>
</head>
<body>
<?php include('Menuphp1.php'); ?>
    <h1>Exercice 2.1 b : </h1>
    <?php
        $array = array(1,2,3,4,5);
        echo "<table><tr>";
    
        for($i=0;$i<5;$i++)
            {
                echo "<td>". $array[$i]."</td>";
            }
        echo "</tr></table>";
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