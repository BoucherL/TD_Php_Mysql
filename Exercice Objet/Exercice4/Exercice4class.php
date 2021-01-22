<?php
class Personnage
{
    //Propriété
    private $_Pseudo;
    private $_Vie;
    private $_degat;

    //méthodes

    public function __construct($pseudo, $degat)
    {

        $this->_Pseudo = $pseudo;
        $this->_degat = $degat;
        $this->_Vie = 100;
    }
    //aficher le pseudo
    public function afficherPseudo(){
        echo "<p> Ton pseudo est ".$this->_Pseudo."</p>";
    }

    public function afficherVie(){
        echo '<p>La vie de ton personnage est de ' . $this->_Vie . ' point de vie.</p>';
    }
    //attaquer un adversaire, soustrait la vie moins les degatss
    public function attaquer($adversaire){
        $this->_Vie -= $this->_degat;
        echo "<p>". $this->_Pseudo . " attaque " .$adversaire->getPseudo() . "</p>";
        $adversaire->setVie($this->_Vie);
    }
    //afficher la vie d'un personnage après une attaque
    public function displayVieRestante()
    {
        echo "<p>Il reste " . $this->_Vie . " point de vie à " . $this->_Pseudo . "</p>";
    }
    //retourne la valeur vie
    public function getVie()
    {
        return $this->_Vie;
    }
    //retourne la valeur degat
    public function getAttaque()
    {
        return $this->_degat;
    }
    //retourne la valeur Pseudo
    public function getPseudo()
    {
        return $this->_Pseudo;
    }
    
    public function setVie($vie)
    {
        $this->_Vie = $vie;

        return $this->_Vie;
    }
}
?>