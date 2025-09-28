<?php
     $pdo = new PDO('mysql:dbname=blog;host=localhost','root','');
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $res = $pdo->query('SELECT * FROM articles');
     var_dump($res->fetchAll())
     /* $count = $pdo->exec('INSERT INTO articles SET titre="Mon titre", date_d_ajout ="'. date('Y-m-d H:i:s') .'"');
     var_dump($count);  */

?>      