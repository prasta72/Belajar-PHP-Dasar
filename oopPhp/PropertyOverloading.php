<?php 


class Zero
{
    private array $properties = [];



    public function __get($name)
    {
       return $this->properties[$name];
    }
    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function __isset($name)
    {
        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        var_dump($arguments);
        echo "keren sekali anda $name : $join";
    }

    public function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "keren sekali anda $name : $join";
    }

}


$zero = new Zero();
$zero->firstName = "kadek";
$zero->midleName = "prasta";
$zero->lastName = "Dwiutama";
echo $zero->firstName. PHP_EOL;
echo $zero->midleName. PHP_EOL;
echo $zero->lastName. PHP_EOL;

unset($zero->midleName);
$zero->helloSay('eko','keren');
Zero::keren('kamu','danmereka');



?>