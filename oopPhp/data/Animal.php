<?php 
namespace Data;

require_once "Food.php";

abstract class Animal {
    public string $name ="Budi";
    abstract public function run():void;
    abstract public function eat(AnimalFood $food):void;
}

 class Cat extends Animal
 {
     public function run():void {
        echo "My cat name is $this->name is mother fucker baby" . PHP_EOL;
     }

     public function eat(Food $food): void
     {
         echo "the do is eating " .PHP_EOL;
     }
 }

 class Dog extends Animal
 {
    public function run():void {
        echo "My cat name is $this->name is mother fucker baby" . PHP_EOL;
     }
     
     public function eat(Food $food): void
     {
         echo "the do is eating " .PHP_EOL;
     }
 }


?>