<?php
// Дан массив $arr.
// С помощью первого цикла foreach выведите на экран столбец ключей,
// с помощью второго — столбец элементов.</p>
$arr=range(1, 23, 3);
foreach ($arr as $key => $value){
    echo "{$key} <br>";
}
echo "<hr>";
foreach ($arr as $value){
    echo "{$value} <br>";
}
