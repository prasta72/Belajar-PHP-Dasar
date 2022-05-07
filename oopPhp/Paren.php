<?php 

require_once 'data/Shape.php';


use Data\{Shape,Rectangle};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;


$rectange = new Rectangle();

echo $rectange->paretGetCorner();






?>