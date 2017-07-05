<?php
//1
$a = false && true || false && true || !false && true;
echo"{$a}<br>";

//2
$x=3;
if ($x%2==0){
    echo"true";
} else {
    echo"false";
}