<?php 

function ValidateLoginRequest(LoginRequest $requset){
    if(!isset($requset->username)){
        throw new validationException("Username is null");
    }else if(!isset($requset->password)){
        throw new validationException("password is null");
    }else if(trim($requset->username) == ""){
        throw new Exception("Username is empty");
    }else if(trim($requset->password) == ""){
        throw new Exception("password is empty");
    }

}



?>