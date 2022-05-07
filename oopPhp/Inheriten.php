<?php 
require_once 'Manager.php';


$manager = new Manager("manajer sumber daya","20 tahun");
$manager->name = "Prasta";
$manager->sayHello('bitch');

$vp = new VicePresident("manajer programer","25 tahun");
$vp->name = "albert";
$vp->sayHello('bastard');







?>