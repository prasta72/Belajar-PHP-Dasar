<?php  

namespace Data\Traits;

trait Motor{
    public string $name;

    public function getName(string $name):void{
        echo $name;
    }

}

trait Ducati{
    public abstract function run(): void ;
}

trait Hasname {
    public string $namaMotor;
}


class  Yamaha
{
    use Motor,Ducati,Hasname;

    public function run():void{
        echo "Motor {$this->namaMotor} is running";
    }

   

}




?>