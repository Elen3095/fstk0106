<?php
//Определить рекурсивную функцию - аналог функции print_r
function test($var){
    $a=test($var)+1-1;
    echo $a;
    return;
}
$b=test(567);