<?php
//1) создать класс Cat, добавить свойства Имя, Возраст. Добавить метод который выводит var_dump объекта этого класса
class Cat
{
    public $name;
    public $age;
    public function V_D()
    {
        var_dump($this);
    }
}
//$a=new Cat();
//$a->V_D();

//2) Создать класс Request который моделирует HTTP Request - url, headers, method, status
class Request
{
    public $url;
    public $headers;
    public $method;
    public $status;
}

//3) создать класс Fraction - простая дробь. Добавить метод для получения десятичной дроби из обычной
class Fraction
{
    public $x1;
    public $x2;
    public function GetVal(){
        return (float) ($this->x1)/($this->x2);
    }
}