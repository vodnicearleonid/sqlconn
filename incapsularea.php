<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car</title>
</head>
<body>

</body>
</html>

<?php

class Car
{
    protected string $speed;
    protected string $wheels;
    protected string $color;

    function __construct($speed, $color) {
        $this->speed = $speed;
        $this->color = $color;
    }

    function showInfo() {
        echo "Speed Car: " . $this->speed . "<br>";
    }

}

class BMW extends Car
{
    private $model;

    function  __construct($speed, $color, $model)
    {
        parent::__construct($speed, $color);
        $this->model = $model;
    }

    function showInfo() {
        echo "Speed Car: " . $this->speed . "<br>";
        echo "Car model: " . $this->model . "<br>";
        echo "Car color: " . $this->color . "<br>";
    }

//    function setModel(){
//        echo "Car model: " . $this->model . "<br>";
//        echo "Car color: " . $this->color . "<br>";
//    }
}

class Audi extends Car
{

}

$m3 = new BMW(340, "RED", "M3");
$m3->showInfo();
//$m3->setModel("M3");

echo "<br>";

$x5 = new BMW(250, "Green", "X5");
$x5->showInfo();
//$x5->setModel();

