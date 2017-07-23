<?php
//Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.
function scanDirectory($param){
    $wayToDir='..'.DIRECTORY_SEPARATOR.$param;
    $showDir=scandir($wayToDir);
    for ($i=0; $i<=count($showDir);$i++){
        if($showDir[$i]=='.'){
            unset($showDir[$i]);
        } elseif ($showDir[$i]=='..'){
            unset($showDir[$i]);
        }
    }
    print_r($showDir);
}
$nameDirectory="homework18.07.17";
echo scanDirectory($nameDirectory);