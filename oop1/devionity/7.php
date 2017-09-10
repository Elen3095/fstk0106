<!--//task17-->
<!--//В класс Car из предыдущих заданий добавить конструктор, который выводит сообщение Car created-->
<!--// при создании нового экземпляра класса. Создать контактную форму. Создать скрипт обработчик контактной формы.-->
<!--// Создать класс ContactForm со свойствами, значения которых совпадают с названиями полей формы.-->
<!--// Создать экземпляр класса ContactForm по массиву $_POST при отправке формы.-->

<form method="post">
    Your name<br>
    <input type="text" name="name"><br>
    Your e-mail<br>
    <input type="text" name="email"><br>
    Message<br>
    <textarea name="message"></textarea><br>
    <input type="submit" value="Send">
    <input type="reset" value="Clear">
</form>

<?php

class Car
{
    public $brand;
    public $model;
    public $year;
    public $driver;
    public function __construct()
    {
        echo "Car created";
    }
}

class ContactForm
{
    public $name;
    public $email;
    public $message;
}
$ContactForm1 = new ContactForm();


if($_POST){
$ContactForm1 = new ContactForm();
$ContactForm1->name=$_POST['name'];
$ContactForm1->email=$_POST['email'];
$ContactForm1->message=$_POST['message'];
}
var_dump($ContactForm1);
