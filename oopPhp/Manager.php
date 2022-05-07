<?php 


    class Manager 
    {
        var string $name;
        var string $jabatan;
        var string $masaKerja;

        function __construct(string $bidang ,?string $masaKerja)
        {
            $this->jabatan = $bidang;
            $this->masaKerja =$masaKerja;

            echo "jabatan saya adalah {$this->jabatan} " . PHP_EOL;
            echo "Masa kerja saya adalah {$this->masaKerja} " . PHP_EOL;
        }

        function sayHello(string $name): void {
            echo "Hi $name , my name is {$this->name}" . PHP_EOL;
        }


    }


    class VicePresident  extends Manager
    {

    }




?>