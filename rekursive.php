<?php 

function rekursiveLoop(int $value = 1){
    if($value == 100000){
        return 'end rekursive';
    }
    else {
        echo $value . PHP_EOL;
        rekursiveLoop($value + 1);
    }
}

var_dump(rekursiveLoop());





?>