<?php
$array =[];
$result =[];
$n = 4;

for ($i =0;$i<$n*3;$i++) {
    array_push($array,rand(0,100));
}
echo "<pre>";
print_r($array);
$first_array = array_splice($array,0,$n);
$second_array = array_splice($array,0,$n);
$third_array = array_splice($array,0,$n);
for ($j =0;$j<$n;$j++) {
    array_push($result,$first_array[$j]);
    array_push($result,$second_array[$j]);
    array_push($result,$third_array[$j]);
}
print_r($result);
