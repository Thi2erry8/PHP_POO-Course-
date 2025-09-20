<?php
     class Personnage{
           public $vie = 20;
           public $atk = 20;
           private $nom;          

           public function __construct($nom)
           {
             $this->nom = $nom;
           }

           public function getNom(){

              return $this->nom;

           }

           public function guerir($i){
             $this->vie += $i;
           }

           public function mort(){
            if($this->vie == 0 ){
              echo $this->nom." "." est mort  ";
            }else{
                echo $this->nom." "." est vivant  ";
            }
           
        
        }
     }
?>