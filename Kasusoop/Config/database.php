<?php 
namespace Config;

class Database
{
    static function getConnection(): \PDO
    {
            $host = "localhost";
            $port = 3306;
            $database = "belajar_php_database";
            $username = "root";
            $password = "";
    
            $conection =  new \PDO("mysql:host=$host:$port;dbname=$database",$username,$password);
        
            return $conection;
    }
}





?>