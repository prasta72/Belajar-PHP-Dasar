<?php 


class Data implements IteratorAggregate {
    var string $first = "satu";
    public string $second = "dua";
    private string $third = "tiga";
    protected string $four = "empat";
    
    public function getIterator()
    {
        $array = [
            "first" =>$this->first,
            "secods" =>$this->second,
            "third" =>$this->third,
            "fourth" =>$this->four,
        ];

        return new ArrayIterator($array);
    }

}

$Dat = new Data();

foreach ($Dat as $property => $value){
    echo "$property : $value" . PHP_EOL;
}





?>