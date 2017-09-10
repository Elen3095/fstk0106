<?php
//task12

//В класс Car из предыдущих заданий добавить private свойство price,
// а также публичные геттер и сеттер для него.+
// Геттер должен зависеть от одного параметра.+
// В зависимости от того, было ли в функцию геттера передано true, в
//ыводить отформатированную цену, либо же в обычном виде (использовать функцию number_format).
// Сеттер должен приводить входящий параметр к числу,
// у которого не более 2 знаков после запятой (использовать round).

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

    private $price;
    public function setVal($val)
    {
        $val=round($val,2);
        $this->price = $val;
        echo $this->price;
    }
    public function getVal($param)
    {
        if ($param){
            echo number_format($this->price, 2);
//            return number_format($this->price, 2);
        } else echo $this->price;
//        return $this->price;
    }
}

$car1= new Car();
$car1->brand='Toyota';
$car1->model='Corolla';
$car1->year=2000;
$car1->showModel();
echo "<br>";
$car1->showBrand();
echo "<br>";
$car1->setVal(2345.43344343);
echo "<br>";
$car1->getVal(true);