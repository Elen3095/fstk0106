<!--1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова,
 которые есть и в первом и во втором поле ввода. Реализацию это логики необходимо поместить
 в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами. -->

<form method="post">
    <textarea name="one">

     </textarea>
    <textarea name="two">

     </textarea>

</form>

<?php
/**
 * @param $a
 * @param $b
 */
function getCommonWords($a , $b){
    $aWords=explode(", ", $a);
    $bWords=explode(", ", $b);

    $arrayForeach= $arrayReturn= [];
    $hasA=$hasB = false;

    if(count($aWords)>count($bWords)){
        $arrayForeach=$aWords;
        $hasA=true;
    } else {
        $arrayForeach=$bWords;
        $hasB=true;
    }
    $countThisArray = count($arrayForeach);
    foreach ($arrayForeach as $value){
        if($hasA && in_array($value, $bWords)){
            $arrayReturn[]=$value;
            continue;
        }
        if($hasB && in_array($value, $aWords)){
            $arrayReturn[]=$value;
            continue;
        }
    }
    return implode (", ", $arrayReturn);

}
if($_SERVER['REQUEST_METHOD']=='POST'){
    echo getCommonWords($_POST["one"], $_POST["two"]);
}
?>