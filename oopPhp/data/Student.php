<?php 

namespace Data\Student;
class Student 
{
    public string $name;
    public int $id;
    public int $value;

     public  function __construct(string $name,int $id,$value)
     {
         $this->name = $name;
         $this->id = $id;
         $this->value = $value;

     }

     public function __clone()
     {
         unset($this->value);
     }

     static public function studDe(string $name,$jeniskel,$hobby):string{
         return "$name - $jeniskel - $hobby" .PHP_EOL;
     }
    
}


?>