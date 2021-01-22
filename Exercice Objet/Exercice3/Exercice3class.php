<?php
class Personnage
{
    //Propriété
    private $_Pseudo;
    private $_Vie;

    //méthodes

    public function __construct($pseudo)
    {

        $this->_Pseudo = $pseudo;
        $this->_Vie = 100;
        
    }
    //Afficher le pseudo 
    public function afficherPseudo(){
        echo'Ton pseudo est '.$this->_Pseudo;
    }
    //Afficher la Vie
    public function afficherVie(){
        echo 'La vie de ton personnage est de ' . $this->_Vie . ' point de vie.';
    }


}
?>