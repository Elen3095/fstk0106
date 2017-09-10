<?php
//task16
//Создать экземпляр класса User с конкретными значениями свойств и клонировать его в новую переменную.
// Свойствам нового экземпляра присвоить новые значения. Сравнить полученные экземпляры класса.

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

$user1= new User();
$user1->login="Alex";
$user1->password=1;

$user2=clone $user1;
$user2->password=2;

var_dump($user1 != $user2);