<?php

$array =[1,12,56,26,43,19,90];
$max = $array[0];
$result =[];

for ($i=0;$i<count($array)-1;$i++) {
    for ($j=$i+1;$j<count($array);$j++) {
        if ($array[$i] > $array[$j]) {
            $temp = $array[$j];
            $array[$j] =$array[$i];
            $array[$i] =$temp;
        }
    }
}
echo "<pre>";
print_r($array);


$min = abs($array[0]-$array[1]);
for ($z =1;$z < count($array);$z++) {
    $space =abs($array[$z]-$array[$z+1]);
    if (  $space <$min) {
            $min = $space;

    }
}

for ($a =0;$a <count($array);$a++) {
    $abc = abs($array[$a]-$array[$a+1]);
    if ($abc == $min) {
        array_push($result,[$array[$a],$array[$a+1]]);
    }
}

print_r($result);
print_r($min);



