<?php
//26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
// +Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
//+индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
//+индекс
$arr=[];
$arr1=[];

for($i=0; $i<=10; $i++){
    array_push($arr , rand(1,100) );
}
echo" у которых парные индексы<br>";
foreach ($arr as $key => $value){
    if(($key>0)&&(($key%2)==0)){
        echo"  $value";
    }
}
echo" <br>";
echo" у которых парные неиндексы<br>";
foreach ($arr as $key => $value){
    if(($key>0)&&(($key%2)!=0)){
        echo"  $value";
    }
}