<!--10. Написать функцию, которая считает количество уникальных слов в тексте.
Слова разделяются пробелами. Текст должен вводиться с формы.-->

<form method="post">
    <textarea name="one">

     </textarea>
    <input type="submit">

</form>

<?php

function uniqueWord($getString){
    $arr=$arr2=[];
    $arr = explode(' ', $getString);
    $arr2=array_unique($arr);
    $a=count($arr2);
    var_dump( $arr2);
    echo" <br>  {$a}";

}
if($_SERVER['REQUEST_METHOD']=='POST'){
    echo uniqueWord($_POST["one"]);
}