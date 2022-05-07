<?php 

require_once "data/validationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validate.php";

$loginreq = new LoginRequest();
$loginreq->username = " ";
$loginreq->password = "password";

try{
    ValidateLoginRequest($loginreq);
}catch(validationException | Exception $exception){
    echo "Validate error :{$exception->getMessage()}". PHP_EOL;
    var_dump($exception->getTrace());
}finally{
    echo "error atau tidak akn di eksekusi" . PHP_EOL;
}


?>