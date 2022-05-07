<?php 

$string = "Suidnya";
strtolower($string);
$value = [];



for($i = 0;$i <= strlen($string)-1;$i++){
    $value[$i] = $string[$i];
}

foreach($value as $key => $data){
    echo "index ke $key = $data" . PHP_EOL;
}


$vokal = ['a','i','u','e','o'];


for($i = 0;$i <= strlen($string)-1;$i++){
    for($k = 0;$k <= strlen($string)-1;$k++){

        if($value[$i] == $vokal[$k]){
            $value[$i] = "a";
        }

        }
    }

   var_dump($value);


?>