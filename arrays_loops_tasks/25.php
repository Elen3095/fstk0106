<?php
//Ваше задание создать массив, наполнить это случайными значениями (функция rand),
// +найти максимальное и минимальное значение и поменять их местами.
$arr=[];
$arr1=[];
$min=20;
$max=0;
for($i=0; $i<=10; $i++){
    array_push($arr , rand(1,100) );
}
print_r($arr);
echo"<br>";
foreach ($arr as $value){
    if($value<$min){
        $min=$value;
    }
    if($value>$max){
        $max=$value;
    }
}
echo"min = {$min}<br>";
echo"max = {$max}<br>";

foreach ($arr as $value){
    if($value==$min) {
        array_push($arr1, $max);
    } elseif ($value == $max) {
        array_push($arr1 , $min );
    } else{
        array_push($arr1 , $value );
    }
}

print_r($arr1);