<?php 

trait A {
    public function doA(){
        echo "a" . PHP_EOL;
    }
    public function doB(){
        echo "b" . PHP_EOL;
    }
}

trait B {
    public function doA(){
        echo "A" . PHP_EOL;
    }
    public function doB(){
        echo "B" . PHP_EOL;
    }
}

class Get {
    use A,B {
        A::doA insteadof B;
        B::doB insteadof A;
    }

}

$do = new Get();
$do->doA();
$do->doB();
?>