<?php 

require_once "data/Motor.php";

use Data\Traits\{Motor,Yamaha,Ducati,Hasname};


$yahama = new Yamaha();
$yahama->namaMotor = "Ducati";
$yahama->getName('Yamaha KLSX');
$yahama->run();


?>