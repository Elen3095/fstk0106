<?php
//task12
//Унаследовать от класса Car из предыдущих занятий класс WaterCar со свойством waterSpeed.

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

class WaterCar extends Car
{
    public $waterSpeed;
}

//task13
//Изменить область видимости свойств класса User на protected.
// Унаследовать от класса User классы Manager, Admin.
// Создать объекты менеджера и админа, задать значения для свойств объектов.

class User
{
    protected $login;
    protected $password;
    protected $email;
    protected $rating =0;
}

class Manager extends User
{

}

class Admin extends User
{

}

//Создать объекты менеджера и админа, задать значения для свойств объектов невозможно,
// через недоступную область видимости
