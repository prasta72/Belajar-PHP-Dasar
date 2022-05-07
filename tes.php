<?php 

function sayHello(string $name,$last,$filter){
    $fullname = $filter($name . $last);

    echo "halloo anjing lo" .PHP_EOL . $fullname . PHP_EOL;
}


sayHello('PRASTA', 'kerenNN',fn($name) => strtolower($name));

sayHello('KUTU', 'kerenNN', function($name){
    return strtolower($name);
});

$name = fn(string $data) =>  "kamu keren $data";

echo $name('ucup');

?>


