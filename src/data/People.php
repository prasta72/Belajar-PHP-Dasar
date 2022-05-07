<?php 

namespace PrastaKeren\data;

class People 
{
   
    public function __construct(private string $name)
    {
       
    }


    public function sayHello(string $name){
        echo "hello $name , My Name is $this->name";
    }

    
}



?>
