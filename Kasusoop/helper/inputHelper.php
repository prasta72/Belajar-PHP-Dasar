<?php 
namespace helper;

class InputHelper
{

    static function input(string $info)
    {

        echo "$info :";

        $result = fgets(STDIN);

        return $result;

    }
}


?>