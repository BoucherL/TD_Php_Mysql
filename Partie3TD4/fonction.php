<?php function ajouter(){
        try{
            $MaBase = new PDO('mysql:host=192.168.65.206; dbname=louis_exo2; charset=utf8','root', 'root');
            $Objet = $MaBase->query('INSERT INTO Patient VALUES ("5", "Massimo", "Schenwesko")');
            $Objet->closeCursor();
        }catch(Exception $e){
            echo "Une erreur c'est produite :".$e->getMessage();
        }
}
?>
