<!--Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.-->
<!-- Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.-->
<form method="post">
    input number N:
    <input type="number" name="number">
    <input type="submit">

</form>

<?php
$Words=$Words2=$Words3=$WordsToDelete=[];
$N=$_POST['number'];
$count=0;
$fileName=__DIR__.DIRECTORY_SEPARATOR.'3.txt';
if($_SERVER['REQUEST_METHOD']=='POST'){
//    print_r(
            file_get_contents($fileName)
//    )
    ;
    $Words=explode( '.',file_get_contents($fileName));
    foreach($Words as $value){
        $Words2=explode( ',',$value);
        foreach ($Words2 as $value2 ){
            $Words3=explode( ' ',$value2);
            foreach ($Words3 as $value3 ){
                if($N < strlen($value3)){
                    array_push($WordsToDelete, $value3);
                }
            }
        }
    }
//    print_r($WordsToDelete);
    $stringReplace=file_get_contents($fileName);
    file_put_contents($fileName, str_replace($WordsToDelete, "", $stringReplace ));

    print_r(            file_get_contents($fileName)
    );
}

?>