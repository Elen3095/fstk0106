<?php
$a= array ([1, 2, 3, 4]);
function taskDevionity( $x, $boo=false){
    if ($boo==false){
        $c=var_dump($x) ;
        echo "<pre> {$c} </pre>";
    } elseif ($boo==true){
        print_r($x);
        echo"2";
    }
}
taskDevionity($a, 1);