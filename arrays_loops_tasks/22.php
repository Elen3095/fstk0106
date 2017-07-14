<?php
//22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
//+xx<br>
//+xxxx<br>
//+xxxxxx<br>
//+xxxxxxxx<br>
//+xxxxxxxxxx</**
$i=2;
$x="x";
while($i<=5){
    $i++;
    $x.='x';
    echo"{$x} <br>";
}