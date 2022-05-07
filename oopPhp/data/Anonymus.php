<?php 

interface HelloWord{
    function sayHello():void;
}

$hello = new class implements HelloWord {
    public function sayHello():void {
        echo "kamu keren";
    }
}




?>