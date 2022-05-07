<?php
namespace Data\Shelter;
require_once "Animal.php";

use Data\{Animal,Cat,Dog};



interface AnimalShelter {
    public function adopt(string $name):Animal;
}

class CatShelter implements AnimalShelter {
    public function adopt(string $name): Cat
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

class DogShelter implements AnimalShelter {
    public function adopt(string $name): Dog
    {
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}
?>