<?php
//Выведите на экран n раз фразу "Silence is golden".
// Число n вводит пользователь на форме.
// Если n некорректно, вывести фразу "Bad n".
$n=3.1;
if (is_int($n)){
    for($i=1; $i<=$n;$i++){
        echo"{$i}. Silence is golden<br>";
    }
} else {
    echo"Bad n";
}