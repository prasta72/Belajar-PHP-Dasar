<?php 





$name = "sandrina";

$hobby = "sepak bola";


$getdata = function() use ($name,$hobby) {
    echo "nama saya $name dan hobby saya $hobby" . PHP_EOL;
};

echo $getdata();


?>