<?php 

require_once 'data/Programer.php';


$company = new Company();

$company->programer = new Programer('eko');


$company->programer = new BackendProgramer('eko');


$company->programer = new FrondendProgramer('eko');



sayHello(new Programer('eko'));
sayHello(new BackendProgramer('prasta'));
sayHello(new FrondendProgramer('eka'));





?>