<?php

require 'src/Car.php';
require 'src/Bike.php';

$car = new Car('blue', 4, 'gasoline');

var_dump($car);


echo "<br>" . $car->start() . "<br>";
echo "<br>" . $car->forward() . "<br>";
echo "<br>" . "My current speed is " . $car->getCurrentSpeed() . "km/h" . "<br>";
echo "<br>" . $car->forward() . "<br>";
echo "<br>" . "My current speed is " . $car->getCurrentSpeed() . "km/h" . "<br>";
echo "<br>" . $car->forward() . "<br>";
echo "<br>" . "My current speed is " . $car->getCurrentSpeed() . "km/h" . "<br>";
echo "<br>" . $car->brake() . "<br>";


$bike = new Bike('green', 1, 2);
var_dump($bike);

$tandem = new Bike("white", 2, 2);
var_dump($tandem);

$monoWheel = new Bike("red", 1, 1);
var_dump($monoWheel);

echo "<br>" . $monoWheel->start() . "<br>";
echo "<br>" . $monoWheel->forward() . "<br>";
echo "<br>" . "My current speed is " . $monoWheel->getCurrentSpeed() . "km/h" . "<br>";
echo "<br>" . $monoWheel->forward() . "<br>";
echo "<br>" . "My current speed is " . $monoWheel->getCurrentSpeed() . "km/h" . "<br>";
echo "<br>" . $monoWheel->forward() . "<br>";
echo "<br>" . "My current speed is " . $monoWheel->getCurrentSpeed() . "km/h" . "<br>";
echo "<br>" . $monoWheel->brake() . "<br>";
