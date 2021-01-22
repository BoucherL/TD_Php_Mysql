<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Exercice 1 objet</title>
    
</head>
<body>
    <div class="titre">
    <h1>Exercice 1 objet</h1>
    </div>
<?php include "User.php";
    $Louis = new User; ?>
    <table class="tableau">
    <tr>
    <th>User</th>
    </tr>
    <tr>
<?php echo '<td>';$Louis->afficheUser(); echo'</td>';
?>
    </tr>
    </table>
</body>
</html>