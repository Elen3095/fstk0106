<!--2. Создать форму с элементом textarea.
При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
 Реализовать с помощью функции.-->

<?php
function wordLenght($inputText){
    $stringNotValidate = ['.',',',' - ','_','+','?','!'];
    $inputText = str_replace( $stringNotValidate ,'',$inputText);
    $listsWords=explode(" ", $inputText);
    $listsReturn=array_map('returnCountWord',$listsWords);
    arsort($listsReturn);
    $keys=array_keys($listsReturn);
    return [
        $listsWords[$keys[0]],
        $listsWords[$keys[1]],
        $listsWords[$keys[2]]
    ];
//    for($i=1; $i<=3;$i++){
//        $ar=array_unshift($listsReturn);
//        foreach ($ar as $key => $value){
//            $value =$listsWords[$key];
//        }
//    }
}
function returnCountWord($wordItem){
    return strlen($wordItem);
}

?>
<form method="post">
    <textarea name="wordInput">

    </textarea>

</form>
