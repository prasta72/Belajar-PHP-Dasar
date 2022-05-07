<?php 

require_once __DIR__ . "/helper/testConection.php";

$connection = getConection();

$keren = "kamu lucu akus suka kamu";

// $sql = <<<SQL
//     INSERT INTO user(id, username, password, email)
//     VALUES ('prsata', 'keren', 'sekali');
// SQL;
$connection->exec("INSERT INTO user(id, username, password, email) 
VALUES (NULL, 'KUCING', 'ORANGE', 'KEREN')");

$connection->exec("INSERT INTO todolist(id, list)
VALUES (NULL, '$keren')");
echo "berhasil menambah data";





$connection = null;



?>