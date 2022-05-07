<?php 

$data = new DateTime();
$data->setTimezone(new DateTimeZone('Asia/Makassar'));

var_dump($data);

class time
{
    public string $date;
    public function __construct(string $date)
    {

        $this->date = $date;

        
    }

    
}

class gettime {
    public function getTheTime(time $time){
        echo $time->date;
    }
}

$keren = new gettime();
$keren->getTheTime(new time('keren'));


?>