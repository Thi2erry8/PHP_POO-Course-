<?php


     $db = new App\Database('blog');
     $datas = $db->query('SELECT * FROM articles');
     var_dump($datas);
     /* $count = $pdo->exec('INSERT INTO articles SET titre="Mon titre", date_d_ajout ="'. date('Y-m-d H:i:s') .'"');
     var_dump($count);  */

?>       