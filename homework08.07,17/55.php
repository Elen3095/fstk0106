<?php
$f = fopen("file.txt", "w");
for($i=1; $i<=10; $i++){
    $s="{$i}";

    for($j=1; $j<$i; $j++){
        $s.="{$i}";
    }
    fwrite($f, "{$s}".PHP_EOL);
}
fclose($f);