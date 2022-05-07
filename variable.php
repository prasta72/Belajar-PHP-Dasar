<?php 

// $name = 'rika';

// function stac(){
//     static $counter = 1;

//     echo "conter $counter" . PHP_EOL;

//     $counter++;
// }

// stac();
// stac();


function getFullName(string $firstname,$lastname,$filter)
{
    $fullname = $filter($firstname . " " . $lastname);

    echo $fullname . PHP_EOL;

}


getFullName('Kadek','Prasta',fn($fullname) => strtolower($fullname));

?>