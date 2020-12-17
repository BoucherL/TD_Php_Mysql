<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 b</title>
</head>
<body>
<?php include('Menuphp1.php'); ?>
    <h1>Exercice 3b : </h1>
    <p>
    <table border=2px>
    <?php
       $i=0;
       $tableau = [[
           'Nom'=>"Boucher",
           'Prenom'=>"Louis",
           'Mot de passe'=>"mdp",
       ],
       [
           'Nom'=>"Boucher",
           'Prenom'=>"Louis",
           'Mot de passe'=>"mdp",
       ],
       [
           'Nom'=>"Boucher",
           'Prenom'=>"Louis",
           'Mot de passe'=>"mdp",
       ],
       [
           'Nom'=>"Boucher2",
           'Prenom'=>"Louis2",
           'Mot de passe'=>"mdp2",
       ],
       [
           'Nom'=>"Boucher3",
           'Prenom'=>"Louis3",
           'Mot de passe'=>"mdp3",
       ]];
       for($i=0;$i<sizeof($tableau);$i++)
       {
           echo
           "<tr>
           <td>".$tableau[$i]['Nom']."</td>
           <td>".$tableau[$i]['Prenom']."</td>
           <td>".$tableau[$i]['Mot de passe']."</td>
           </tr>";
       }
       ?>
       </table>
       </p>
       <p><a href="/Boucher/Boucherphp/">Retour</a></p>
       <h1>Code : </h1>
       <?php
       highlight_file(__FILE__)
       ?>
</body>
</html>