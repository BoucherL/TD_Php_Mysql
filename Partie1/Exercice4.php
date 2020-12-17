<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
<?php include('Menuphp1.php'); ?>
<h1>Exercice 4</h1>
<?php 
        $A = 8;
        $B = 11;
        $C = 2;
        $x0 = 0;
        $x1 = 0;
        $x2 = 0;
        $delta=($B*$B)-4*$A*$C;
        if ($delta<0)
        {
            echo"<p>Il n'y a pas de solution</p>";
        }
        elseif ($delta==0)
        {
            $x0=$B/2*$A;
            echo"<p>Il y a une solution :</p>
            <p><sub>0</sub>= ".$x0."</p>";
        }
        else
        {
            $x1=(-$B-sqrt($delta))/2*$A;
            $x0=(-$B+sqrt($delta))/2*$A;
            echo"<p> Il y a deux solutions :</p>
            <p>x<sub>1</sub>= ".$x1." et x<sub>2</sub>= ".$x2."</p>";
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