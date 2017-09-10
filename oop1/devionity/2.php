<?php

//task9
//Для класса User из предыдущего занятия создать методы login(), logout(), которые просто выводят на экран
// соответствующее сообщение. Создать экземпляр класса, вызвать созданные методы.
class User
{
    public $login;
    public $password;
    public $email;
    public $rating =0;

    public function login(){
        echo 'You were logined';
    }
    public function logout(){
        echo 'You were logouted';
    }
}

$mike= new User();
$mike->login='Mike';
$mike->login();
echo "<br>";
$mike->logout();