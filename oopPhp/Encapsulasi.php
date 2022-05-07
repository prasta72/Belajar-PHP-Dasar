<?php 

require_once "data/Category.php";
use Data\{Category};

$category = new Category();
$category->setName("lambogini");
$category->setExpensive(true);

echo "Name : {$category->getName()}" .PHP_EOL;
echo "Expemsive : {$category->getExpensive()}".PHP_EOL;




?>