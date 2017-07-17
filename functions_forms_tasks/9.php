<!--9. Написать функцию, которая переворачивает строку.
 Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.-->
<form method="post">
    <textarea name="one">

     </textarea>
    <input type="submit">

</form>

<?php

function reversString($getString){
    $arr=$arr2=[];
    $arr = str_split( $getString);
    foreach ($arr as $value){
        array_unshift($arr2 , $value );
    }
    $getReversString=implode($arr2);
    echo $getReversString;

}
if($_SERVER['REQUEST_METHOD']=='POST'){
    echo reversString($_POST["one"]);
}