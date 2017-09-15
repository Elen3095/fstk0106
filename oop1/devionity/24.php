<?php

//В класс User из предыдущих заданий добавить магические методы __get, __set для закрытых свойств,
//которые будут возвращать / присваивать соответствующие значения
class User
{
    public $login;
    public $password;
    public $email;
    public $rating =0;

    private $code;

    public function __get($name)
    {
        echo "You tried to get {$name}";
    }

    public function __set($name, $val)
    {
        echo "You tried to set {$name} to {$val}";
    }
}

$user1=new User();
echo  $user1->code;
echo "<br>";
$user1->code = 8;