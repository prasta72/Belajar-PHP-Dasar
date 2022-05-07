<?php 


class Programer {

    public string $name;

    public function __construct(string $name)
    {

        $this->name = $name;
    }
}


class BackendProgramer extends Programer {

}

class FrondendProgramer extends Programer {

}

class Company {
    public Programer $programer;
}

function sayHello(Programer $programer){
    // if($programer instanceof BackendProgramer){
    //     echo "hello Backend Programer " . $programer->name . PHP_EOL;
    // }else if($programer instanceof FrondendProgramer){
    //     echo "hello Frontend Programer " . $programer->name . PHP_EOL;
    // }else if($programer instanceof Programer){
    //     echo "hello Programer " . $programer->name . PHP_EOL;
    // }

    var_dump($programer);
    
}





?>