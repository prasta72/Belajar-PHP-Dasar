<?php 

namespace Data;


class Shape
{
    public function getCorner():int {
        return 0;
    }

    public function helloBoy():string{
        return "kamu keren boy";
    }

}

class Rectangle extends Shape
{
    public function getCorner():int {
        return 4;
    }
    public function paretGetCorner():int {
        return parent::getCorner();
    }

}





?>