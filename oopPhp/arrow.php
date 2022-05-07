<?php 
$y = 1;
 
$fn1 = fn($x) => $x + $y;
// equivalent to using $y by value:
$fn2 = function ($x) use ($y) {
    return $x + $y;
};
echo $fn1(3) .PHP_EOL;
echo $fn2(2) .PHP_EOL;





?>