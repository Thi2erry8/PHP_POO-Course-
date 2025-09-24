<?php
     require 'form.php';
     require 'text.php';
     require 'Personnage.php';
     require 'Archer.php';
     $form = new Form($_POST);

?>
 <form action="#" method="post">
         <?php
               echo $form -> input('username');

               echo $form -> input('password');

               echo $form -> submit();
         ?>
 </form>