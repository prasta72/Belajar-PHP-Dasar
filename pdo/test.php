<?php 

require_once __DIR__ . "/helper/testConection.php";

$conection = getConection();

$sql = "select * from user";

$tatetement = $conection->query($sql);
foreach ($tatetement as $ste){
    var_dump($ste);
}

$conection = null;

?>