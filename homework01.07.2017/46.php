<?php
//Создать алгоритм вычисления максимального значения двух переменных при помощи switch
$x1=2;
$x2=3;
switch($x1>$x2){
    case true:
        echo "max {$x1}";
        break;
    case false:
        echo "max {$x2}";
        break;
    default :
        echo "x1=x2";
}
