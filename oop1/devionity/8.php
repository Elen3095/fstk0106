<?php
//task18
//Создать класс со статическим свойством, которое будет содержать значение количества созданных экземпляров.
class A
{
    public static $count; // static property
}

$x1=new A;
$x2=new A;

A::$count = 2;
echo A::$count;