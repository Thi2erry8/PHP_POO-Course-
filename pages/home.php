<?php
     $pdo = new PDO('mysql:dbname=blog;host=localhost','root','');
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $res = $pdo->query('SELECT * FROM articles');
     $datas = $res->fetchAll(PDO::FETCH_OBJ);
     var_dump($datas[0]->titre);
     /* $count = $pdo->exec('INSERT INTO articles SET titre="Mon titre", date_d_ajout ="'. date('Y-m-d H:i:s') .'"');
     var_dump($count);  */

?>       