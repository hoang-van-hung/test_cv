<?php

$array=[0,100,-4,190,8,99,110,-143];
$max=$array[0];
for($i=1;$i<count($array);$i++){
    if($array[$i]>$max){
        $max=$array[$i];
        $index =$i;
    }
}
echo "<pre>";
$number1 = $array[$index];
//print_r($number1);
array_splice($array,$index,1);
$array_second =$array;




$max2 =$array_second[0];
for($j=1;$j<count($array_second);$j++){
    if($array_second[$j]>$max2){
        $max2=$array[$j];
        $index2 =$j;
    }
}
$number2 = $array_second[$index2];
//print_r($number2);


$sum =$number1+$number2;
print_r($sum);




