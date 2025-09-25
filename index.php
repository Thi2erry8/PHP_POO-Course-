<?php
     require 'class/Autoloader.php';
     Autoloader::register();
     $form = new form($_POST)

?>
 <form action="#" method="post">
         <?php
               echo $form -> input('username');

               echo $form -> input('password');

               echo $form -> submit();
         ?>
 </form>