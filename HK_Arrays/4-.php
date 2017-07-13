<?php
//Решите числовой ребус ЛИСА + ВОЛК = ЗВЕРИ.
// Каждая буква соответствует своей цифре,
// причем различным буквам соответствуют различные цифры.
$a1=["л",'и','с','а'];
$a2=["в",'о','л','к'];
$a3=["з",'в','е','р','и'];

$r=$r1=false;
$a11='';
$a21='';
$a31='';

do{
    foreach ($a1 as $value){
        $value=random_int(0, 9);
        $a11.=$value;
    }
    foreach ($a2 as $value){
        $value=random_int(0, 9);
        $a21.=$value;
    }
    foreach ($a3 as $value){
        $value=random_int(0, 9);
        $a31.=$value;
    }

    if((next($a1)==next($a2))==next($a3)){
        $r1 = true;
    }
    if(($a1[0]==$a2[2])&&($a2[0]==$a3[1])&&($a1[1]==$a3[4])){
        $r = true;
    }
} while($r&&$r1);
echo"{$a11}+{$a21}={$a31}";
