<?php
interface User
{
    public function __get($name);

    public function __set($name, $val);
}


//Реализовать интерфейс из предыдущего задания классом User
 class A implements User
 {

     public function __get($name)
     {
         echo "You tried to get {$name}";
     }

     public function __set($name, $val)
     {
         echo "You tried to set {$name} to {$val}";
     }
 }