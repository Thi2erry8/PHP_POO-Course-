<?php
     require "personnage.php";
     $merlin = new Personnage("Merlin");

     $merlin->guerir(5);

     var_dump($merlin)
?>