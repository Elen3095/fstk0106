<?php
//24. Вам нужно разработать программу, которая считала бы количество вхождений
//+какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
//+442158755745 встречается 4 раза.
$x= 1234445678;
//выбранная вами цифра:
$n=4;
$countX=0;
$xToArray=str_split($x);
foreach ($xToArray as $value){
    if ($value==$n){
        $countX++;
    }
}
echo"количество вхождений {$n} в выбранном вами числе {$x} = {$countX}";