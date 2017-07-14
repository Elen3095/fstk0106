<?php
//Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.
$ar=['html', 'css', 'php', 'js', 'jq'];
foreach ($ar as $value){
    echo "$value <br>";
}