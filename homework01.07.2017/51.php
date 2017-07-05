<?php
$x;
$i;
$a=0;
for ($x=200; $x<=400; $x++){
    for ($i=200; $i<=$x; $i++){
        if ($x%$i==0){
            $a++;
        }
    }
    if($a==2){
        echo"{$x}<br>";
        break;
    }
}