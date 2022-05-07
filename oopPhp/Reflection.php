<?php 
require_once "data/validationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validateutil.php";

$loginreq = new LoginRequest();
$loginreq->username = "prasta";
$loginreq->password = null;



try{
    ValidationUtil::validateReflection($loginreq);
}catch(validationException | Exception $exception){
    echo "Validate error :{$exception->getMessage()}". PHP_EOL;
}finally{
    echo "error atau tidak akn di eksekusi" . PHP_EOL;
}










?>