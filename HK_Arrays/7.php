<?php
//Вывести на экран квадрат, состоящий из n x n квадратов различного цвета.
$n=17;
$x=101000;
for($i=1; $i<=$n; $i++){
    for($j=1; $j<=$n; $j++){
        $x=$x+$i+$j;
        $color="#"."{$x}";
        echo "<img src=\"https://avatanplus.com/files/resources/mid/5831d5ebe351215882aba19b.png\" style=\" background-color: $color; height:20px; margin:2px;\">";

    }
    echo"<br>";
}