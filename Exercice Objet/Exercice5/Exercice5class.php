<?php 
class Personnage{
        //Propriété
        private $_Pseudo;
        private $_Vie;
        private $_degat;
    
        //méthodes
    
        public function __construct($id)
        {
            $BDD = new PDO('mysql:host=192.168.65.206; dbname=Louis-objet;charset=utf8','root','root');
            //requete sql pour séléctionner les id des personnage
            $request = $BDD->query("SELECT * FROM Personnage WHERE id = $id ");

            $data = $request->fetch();
            $this->_Pseudo = $data['Pseudo'];
            $this->_Vie = $data['Vie'];
        }
        //aficher le pseudo
        public function afficherPseudo(){
            echo "<p> Ton pseudo est ".$this->_Pseudo."</p>";
        }
    
        public function afficherVie(){
            echo '<p>La vie de ton personnage est de ' . $this->_Vie . ' point de vie.</p>';
        }
        //attaquer un adversaire, soustrait la vie moins les degats
        //on attend un objet de type personnage
        public function attaquer($adversaire){
            //on soustrait le nombre de vie par le nombre de degats
            $this->_Vie -= $this->_degat;
            echo "<p>". $this->_Pseudo . " attaque " .$adversaire->getPseudo() . "</p>";
            $adversaire->setVie($this->_Vie);
        }
        //afficher la vie d'un personnage après une attaque
        public function displayVieRestante()
        {
            echo "<p>Il reste " . $this->_Vie . " point de vie à " . $this->_Pseudo . "</p>";
        }
        //retourne la vie 
        public function getVie()
        {
            return $this->_Vie;
        }
        //retourne la variable des degats
        public function getAttaque()
        {
            return $this->_degat;
        }
        //retourne la variable du pseudo
        public function getPseudo()
        {
            return $this->_Pseudo;
        }
        //retourne la variable vie
        public function setVie($vie)
        {
            $this->_Vie = $vie;
    
            return $this->_Vie;
        }
}
?>