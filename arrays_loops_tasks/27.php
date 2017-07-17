<?php
//27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов
// в таблице. Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
// Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все
// ячейки будут иметь цвета, выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное
// число. <br><br>
$row=13;
$cols=13;
$colors = array('red','yellow','blue','gray','maroon','brown','green');
for($i=1; $i<=$cols; $i++){
    for($j=1; $j<=$row; $j++){
        $color=$colors[array_rand($colors,1)];
        echo "<img src=\"https://avatanplus.com/files/resources/mid/5831d5ebe351215882aba19b.png\" style=\" background-color: $color; height:30px; margin:2px;\">";

    }
    echo"<br>";
}
