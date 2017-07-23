<?php
//5. Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
//  Директория и искомое слово задаются как параметры функции.
function scanDirectory($paramDir, $paramWord){
    $wayToDir='..'.DIRECTORY_SEPARATOR.$paramDir;
    $showDir=scandir($wayToDir);
//    delete '.' and '..'
    for ($i=0; $i<=count($showDir)+1;$i++){
        if($showDir[$i]=='.'){
            unset($showDir[$i]);
        } elseif ($showDir[$i]=='..'){
            unset($showDir[$i]);
        }

        if (is_numeric(strrpos($showDir[$i], $paramWord))) {
            echo "$showDir[$i]<br>";
        }
    }
//    print_r($showDir);
}
$nameDirectory="homework18.07.17";
    $nameWord=".php";
scanDirectory($nameDirectory, $nameWord) ;