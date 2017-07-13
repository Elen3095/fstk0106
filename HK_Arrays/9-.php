<?php
<?php
//Вывести на экран все шестизначные счастливые билеты.
// Билет называется счастливым, если сумма первых трех цифр в номере билета равна сумме последних трех цифр.
// Найдите количество счастливых билетов и  процент от общего числа билетов.
$ar1= range(1, 3);
$ar2= range(1, 3);
$rez;
do{
    foreach ($ar1 as $value){
        $value=random_int(0,9);
    }
    foreach ($ar2 as $value){
        $value=random_int(0,9);
    }
    if(($ar1!=$ar2)&&(array_sum($ar1)==array_sum($ar2))){
        $rez=implode(array_merge($ar1, $ar2));
        echo"$rez <br>";
    }
} while( );
