<?php 
require_once 'Person.php';

$prasta = new Person("kutu","amlapura");
$prasta->name = "blake";
$prasta->sayHello('I kadek Prasta');


$ucup = new Person("pasek", null);
$ucup->name = "ucup";
$ucup->sayHello('laura');
$ucup->infoAut();
$prasta->infoAut();