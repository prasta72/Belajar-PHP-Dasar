<?php 
require_once "data/Animal.php";
require_once "data/animalshelter.php";

use Data\{Animal,Cat,Dog};
use Data\Shelter\{animalshelter,CatShelter,DogShelter};



$catshel = new CatShelter();
$cat = $catshel->adopt('Luna');

$dogsel = new DogShelter();
$dog = $dogsel->adopt('jimmy');

?>