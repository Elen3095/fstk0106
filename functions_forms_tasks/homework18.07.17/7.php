<!--Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.-->
<!--Все добавленные комментарии выводятся над текстовым полем.-->

<?php
$arrayOfComments=$arrayOfUsers=$arrayOfCommentsToShow=[];
$seeComment="";

if($_SERVER['REQUEST_METHOD']=='POST'&&isset($_POST['textToComment'])&&isset($_POST['name'])){
    $coment=$_POST['textToComment'];
    $userName=$_POST['name'];
    $fileName=__DIR__.DIRECTORY_SEPARATOR.$userName.'.txt';
//
    $fullTextComment=$userName." : ".$coment;
//    $arrayOfComments[$userName]=$coment;
    $seeComment.=" ".$fullTextComment;
    file_put_contents($fileName, $seeComment);
//    array_push($arrayOfCommentsToShow, $arrayOfComments);
//    print_r($arrayOfCommentsToShow) ;


//    array_push($arrayOfComments,$coment);
//    array_push($arrayOfUsers,$userName);
//    foreach ($arrayOfUsers as $key=>$value){
//        $commentsToShow="<br />"."{$arrayOfUsers[$key]}".":"."<br />"."{$arrayOfComments[$key]}";
//        array_push($arrayOfCommentsToShow, $commentsToShow);
//    }
//    $seeComment=serialize($arrayOfCommentsToShow);
}
?>


<div>
    Гостевая книга
</div>
<div>
    <?php
    print_r(file_get_contents($fileName));

    ?>
</div>
<div>
    <form method="post">
        <input type="text" name="name">
        <br>
        <textarea name="textToComment">

        </textarea>
        <br>
        <input type="submit" value="Добавить коммент">
    </form>

</div>



