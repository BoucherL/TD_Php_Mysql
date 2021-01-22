<?php 
class Personnage{
    //Propriété
    private $_Pseudo;
    private $_Vie;
    private $_id;
    

    //Méthodes

    public function __construct($request)
    {   
        $this->_Pseudo = $request['Pseudo'];
        $this->_Vie = $request['Vie'];
        $this->_id = $request['id'];
    }
    //aficher le pseudo
    public function afficherInfoPersonnage(){
        echo"<div> Perso ".$this->_id." : ".$this->_Pseudo." : ".$this->_Vie." Point de vie";
    }
}