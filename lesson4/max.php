<?php
function maxNumber($x,$y){
    if($x<$y){
        return $x;
    }else{
        return $y;
    }


}
 $a=10;
$b=20;
$test=maxNumber($a,$b);
echo "max number of $a and $b is $test";



?>