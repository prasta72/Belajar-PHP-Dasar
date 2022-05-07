<?php 

namespace Helper\math;

class MathHelper {
    static public string $name = "MatHelper";

    static public function sum(int... $number):int{
        var_dump($number);
        $total = 0;
        foreach($number as $num){
            $total += $num;
        }
        return $total;
    }


    static public function stringsum(string... $value):string{
       $join = join(",", $value);
       var_dump($join);
        return $join;
    }


}

MathHelper::sum(1,23,4,56,7,89,8);
MathHelper::stringsum('I', 'Kadek', 'prasta', 'dwiutama');



?>