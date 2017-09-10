<?php

class User
{
    public $login;
    public $password;
    public $email;
    public $rating =0;
}

class Car
{
    public $brand;
    public $model;
    public $year;
    public $driver;
}
//task8
//Создать класс Car. Записать в этот класс свойства brand, model, year, driver.+
// Создать экземпляры машин Toyota Corolla (2000), Mazda 6 (2015), Ford Taurus (1995) .+
// В рамках предыдущего задания создать экземпляры класса User для нескольких пользователей системы.
// В свойство driver объектов класса Car записать объекты класса User.
// Вывести объекты класса Car на экран при помощи var_dump(), print_r()

$car1= new Car();
$car1->brand='Toyota';
$car1->model='Corolla';
$car1->year=2000;

$car2= new Car();
$car2->brand='Mazda';
$car2->model='6';
$car2->year=2015;

$car3= new Car();
$car3->brand='Ford';
$car3->model='Taurus';
$car3->year=1995;

$user1=new User();
$user1->login='Alex';

$user2=new User();
$user2->login='Oleg';

$user3=new User();
$user3->login='Anton';

$car1->driver=$user1;
$car2->driver=$user2;
$car3->driver=$user3;

var_dump($car1);
echo "<br>";
print_r($car1);
echo "<br>";
echo "<hr>";

var_dump($car2);
echo "<br>";
print_r($car2);
echo "<br>";
echo "<hr>";

var_dump($car3);
echo "<br>";
print_r($car3);
echo "<br>";