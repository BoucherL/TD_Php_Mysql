<?php
class Personnage{

//Propriété
private $_Pseudo;
private $_Vie;

//méthodes
public function __construct(){
    
    $_Vie = 100;
    echo 'La vie du personnage est de '.$_Vie.' point de vie.';
}
}
?>