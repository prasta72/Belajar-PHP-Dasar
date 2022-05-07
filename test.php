<?php 

require_once __DIR__ . "/vendor/autoload.php";


use PrastaKeren\data\People;

$people = new People("prasta");

echo $people->sayHello('budi') . PHP_EOL;




?>