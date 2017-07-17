<!--12. Написать функцию, которая в качестве аргумента принимает строку,
 и форматирует ее таким образом, что предложения идут в обратном порядке.-->

<form method="post">
    <textarea name="one">

     </textarea>
    <input type="submit">

</form>

<?php

function reversString($getString){
    $arr = explode('. ',$getString);
//    print_r($arr);
    $arr2=[];
    foreach ($arr as $value){
//            print_r($value);
        array_unshift($arr2,$value);
    }
//
    $m=implode('. ',$arr2);
    echo $m;
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    echo reversString($_POST["one"]);
}
?>