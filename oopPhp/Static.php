<?php 
require_once "helper/mathhelper.php";

use Helper\math\MathHelper;

MathHelper::$name = "ScientHelper";
echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(10,10,8,19,17);

echo "result : $result" . PHP_EOL;
$st = MathHelper::stringsum('keren','kamu','deff','cantik');
echo "$st";


?>