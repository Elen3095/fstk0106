<?php
$x=1;
$a=0;
while($x<=100) :
    $i=1;
    while($i<=$x):
        if ($x%$i==0){
            $a++;
        }
        $i++;
    endwhile;
    if($a==2):
        echo"{$x}<br>";
        $a=0;
     else :
        $a=0;
    endif;
    $x++;
endwhile;