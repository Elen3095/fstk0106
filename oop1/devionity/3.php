<?php
//task10
//Создать массив, который описывает сообщение ключами name, email, message с соответствующими значениями.
// Привести массив к объекту. Проанализировать результат при помощи var_dump.

$arr1=['name'=>'Mike','email'=>'bla@mail.ru','message'=>'lol'];
$obj = (object)$arr1;
var_dump($obj);

//task11
//В класс Car из предыдущих заданий добавить методы showBrand(), showModel()
// которые выводят на экран значения свойств brand, model соответственно.
// В класс User из предыдущих заданий добавить свойство isLogged, которое принимает true,
// если пользователь успешно авторизировался, и false при выходе из системы. З
//адать значения для этого свойства в методах login(), logout()

class Car
{
    public $brand;
    public $model;
    public $year;
    public $driver;

    public function showModel(){
    echo $this->model;
    }
    public function showBrand(){
    echo $this->brand;
    }

}

class User
{
    public $login;
    public $password;
    public $email;
    public $rating =0;

    public function login(){
        return true;
    }
    public function logout(){
        return false;
    }

    public function isLogged(){
        if ($this->login() == true){
            echo "true isLogged";
            return true;
        }
        return false;
    }
}

$mike= new User();
$mike->login='Mike';
$mike->login();
echo "<br>";
$mike->isLogged();