<?php 

class Person 
{
    const AUTOR = "programer new bie";
    var string $name;
    var ?string $address;
    var string $country = "jakarta";
    var int $far;


    function __construct(string $name,?string $addres)
    {
        $this->name = $name;
        $this->address = $addres;
    }


    function sayHello(?string $name){

        if(is_null($name)){
            echo "heloo my name is {$this->name}"  . PHP_EOL;
        }
        else{
            echo "Hello $name my name is {$this->name}" . PHP_EOL;
        }
        
    }

    function infoAut(){
        echo "autor :" . self::AUTOR .PHP_EOL;
    }


    function __destruct()
    {
        echo "data nama {$this->name} is destroyed". PHP_EOL;
    }

}




?>