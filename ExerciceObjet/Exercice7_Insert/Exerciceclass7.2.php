<?php 
class Personnage{
    //Propriété
    private $_Pseudo;
    private $_Vie;
    private $_BDD;
    

    //Méthodes

    public function __construct($_BDD)
    {   
        $this->_BDD = $_BDD;
        $this->_Pseudo = $_GET['Pseudo'];
        $this->_Vie = $_GET['Vie'];
    }
    //aficher le pseudo
    //Inserer le pseudo et la vie dans la table Personnage le pseudo et la vie
    public function InsererPerso(){
        $requete = $this->_BDD->query("INSERT INTO Personnage(Pseudo, Vie) VALUES ('".$this->_Pseudo."', '".$this->_Vie."')");
    }
}