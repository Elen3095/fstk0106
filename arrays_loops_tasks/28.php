<?php
for($i=1; $i<=10; $i++){
    echo "<div style=\"float:left; margin:10px;\">";
    for($i2=1; $i2<=10; $i2++){
        $rez=$i*$i2;
        echo "{$i} * {$i2} = {$rez} <br>";

    }
    echo "</div>";
}