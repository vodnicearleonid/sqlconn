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

    function showSpeed() {
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

    function setModel(){
        echo "Car model: " . $this->model . "<br>";
        echo "Car color: " . $this->color . "<br>";
    }
}

class Audi extends Car
{

}

$m3 = new BMW(340, "RED", "M3");
$m3->showSpeed();
$m3->setModel("M3");

echo "<br>";

$x5 = new BMW(250, "Green", "X5");
$x5->showSpeed();
$x5->setModel();

//res

//Speed Car: 340
//Car model: M3
//Car color: RED

//Speed Car: 250
//Car model: X5
//Car color: Green