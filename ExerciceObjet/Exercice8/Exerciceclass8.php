<?php 
class Personnage{
    //Propriété

    private $_Pseudo;
    private $_BDD;
    private $_id;
    

    //Méthodes

    public function __construct($_BDD)
    {   
        $this->_BDD = $_BDD;
    }
    //aficher le pseudo
    //Inserer le pseudo et la vie dans la table Personnage le pseudo et la vie
    public function Delete(){
        $requete2 = $this->_BDD->query("DELETE FROM Personnage WHERE _id = ".$_POST["Personnage"]);
    }
}