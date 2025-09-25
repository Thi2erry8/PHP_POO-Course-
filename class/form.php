<?php

    /*
    *class Form
    *Permet de generer un formulaire rapidement et simplement
    */
     class form{
           /*
             *@Var array donnees utilisees par le formulaire
           */
           private $data;
           /*
             *@Var string utilise pour  contenir les champs
           */
           public $surround = 'p';
           /*
             *@param utilise pour  recuperer les donnees utiliser dans le formulaire
           */
           public function __construct($data){
                $this->data = $data;
           }
           /*
             *@param code html a entourer
           */
           private function surround($hmtl){
               return "<{$this->surround}>{$hmtl}</{$this->surround}>" ; 
           }
           /*
             *@param code html a entourer
           */
           private function getValue($index){
               return isset($this->data[$index]) ? $this->data[$index] : null;
           }

           public function input($name){
             return $this->surround ('<input type="text" name=" ' . $name .'" value=" '. $this->getValue($name) .' ">');
           }

           public function submit(){
              return $this->surround ('<button type="submit">Envoyer</button>');
           }
     }
?>