<!--//6. Создать страницу, на которой можно загрузить несколько фотографий в галерею.-->
<!--// Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.-->
<form method="post" enctype="multipart/form-data">
    <input type="file" accept="image/jpeg, image/png" name="FileUpload">
    <br />
    <input type="file" accept="image/jpeg, image/png" name="FileUpload">
    <br />
    <input type="file" accept="image/jpeg, image/png" name="FileUpload">
    <br />
    <input type="file" accept="image/jpeg, image/png" name="FileUpload">
    <br />
    <input type="file" accept="image/jpeg, image/png" name="FileUpload">
    <br />
    <input type="file" accept="image/jpeg, image/png" name="FileUpload">
    <br />
    <input type="submit">
    <br />

</form>
<?php
$imageDirPath=__DIR__.DIRECTORY_SEPARATOR.'image';
if ($_SERVER['REQUEST_METHOD']=='POST'){
//    die(print_r($_FILES, true));
    if(array_key_exists('FileUpload', $_FILES)&& !$_FILES['FileUpload']['error']){
        if(!is_dir($imageDirPath)){
            mkdir($imageDirPath , 0777, true);
        }

        file_put_contents($imageDirPath.DIRECTORY_SEPARATOR.$_FILES['FileUpload']['name'],
            file_get_contents($_FILES['FileUpload']['tmp_name']));


        $file= fopen($imageDirPath.DIRECTORY_SEPARATOR.$_FILES['FileUpload']['name'], 'w+');
        fwrite($file, file_get_contents($_FILES['FileUpload']['tmp_name']));
        $getContent=fgetc($file);
        fclose($file);
        foreach ($_FILES['FileUpload']['tmp_name'] as $valueImg){
            $fileToShow =file_get_contents($valueImg);
            echo "<div style=\'float:right; height:200px\'>".$fileToShow."</div>";
        }
        die('FileUpload: OK');
    }
}


?>