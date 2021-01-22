<?php
class Personnage{
            //Propriété
            private $_Pseudo;
            private $_Vie;
            private $_BDD;
            private $_id;
            
        
            //Méthodes
        
            public function __construct($_id)
            {
                $this->_BDD = new PDO('mysql:host=192.168.65.206; dbname=Louis-objet;charset=utf8','root','root');
                $request = $this->_BDD->query("SELECT * FROM Personnage WHERE id = '$_id'");
                $request = $request->fetch();
                $this->_id = $_id;
                
                $this->_Pseudo = $request['Pseudo'];
                $this->_Vie = $request['Vie'];
            }
            //aficher le pseudo
            public function afficherPseudo(){
                echo "<p> Ton pseudo est ".$this->_Pseudo."</p>";
            }
            //afficher la Vie
            public function afficherVie(){
                echo '<p>La vie de ton personnage est de ' . $this->_Vie . ' point de vie.</p>';
            }
            //Afficher le pseudo et la vie
            public function PseudoetVie(){
                echo"<p> Pseudo : $this->_Pseudo, Point de vie : $this->_Vie</p>";
            }
            //Fonction attaquer un pseudo et afficher
            //Paramètre: la personne qui est attaquer 
            //la cible perd 20 point de vie
            public function attaquer($cible){
                echo"<p>$this->_Pseudo attaque $cible->_Pseudo</p>";
                $this->defense($cible,20);
            }
            //defense affiche nombre de point de vie perdu et point de vie restant
            public function defense($cible, $attaquer){
                $cible->_Vie -= $attaquer;
                $this->_BDD->query("UPDATE Personnage SET Vie='".$cible->_Vie."' WHERE _ID='".$cible->_id."'");
                echo"<p>$cible->_Pseudo à perdu $attaquer Point de Vie</p>";
                echo"<p>Il ne reste plus que $cible->_Vie Point de Vie à $cible->_Pseudo</p>";
            }
            //Fonction se soigner
            public function soin() {
                echo"<div>$this->_Pseudo se soigne. Il regagne 20 PV";
                $this->_Vie += 20;
                $this->_BDD->query("UPDATE Personnage SET Vie='".$this->_Vie."' WHERE id ='".$this->_id."'");
            }
    
        }