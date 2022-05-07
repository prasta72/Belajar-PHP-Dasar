<?php 


class ValidationUtil
{
    static public function validate(LoginRequest $request){
        if(!isset($request->username)){
            throw new validationException("Username is null");
        }else if(!isset($request->password)){
            throw new validationException("password is null");
        }else if(trim($request->username) == ""){
            throw new Exception("Username is empty");
        }else if(trim($request->password) == ""){
            throw new Exception("password is empty");
        }
    }


    static function validateReflection($request){
        $reflectin = new ReflectionClass($request);
        $property = $reflectin->getProperties(ReflectionProperty::IS_PUBLIC);
        var_dump($property);
        
        foreach($property as $proper){
            // var_dump($proper);
            if(!$proper->isInitialized($request)){
                throw new validationException("$proper->name is not set");
            }else if(is_null($proper->getValue($request))){
                throw new validationException("$proper->name is not null");
            }
        }

    }
}


?>