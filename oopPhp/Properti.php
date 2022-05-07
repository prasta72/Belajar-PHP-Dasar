<?php 
require_once 'Person.php';

$person = new Person("prasta","amlapura");

$person->name = "prasta";
// $person->address = null;
$person->country = 'Indonesia';
$person->far = 20;

echo "Nama : $person->name". PHP_EOL;
// echo "addres  : $person->address". PHP_EOL;
var_dump($person);



?>