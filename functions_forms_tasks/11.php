<!--1. Написать функцию, которая в качестве аргумента принимает строку,
и форматирует ее таким образом, что каждое новое предложение начиняется с большой буквы.-->


<form method="post">
    <textarea name="one">

     </textarea>
    <input type="submit">

</form>

<?php

function Caps($getString){
    $arr = explode('. ',$getString);
//    print_r($arr);
    $arr2=[];
        foreach ($arr as $value){
            $value=ucfirst($value);
//            print_r($value);
            array_push($arr2,$value);
        }
//
$m=implode('. ',$arr2);
echo $m;
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    echo Caps($_POST["one"]);
}
?>