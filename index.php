<?php

require 'src/Vehicle.php';
require 'src/Car.php';
require 'src/Bike.php';
require 'src/Truck.php';
require 'src/MotorWay.php';
require 'src/PedestrianWay.php';
require 'src/ResidentialWay.php';


$truck = new Truck('grey', 8, 'gasoline', 255);
var_dump($truck);
$camion = new Truck('green', 16, 'super 95', 150);
var_dump($camion);

$motorWay = new MotorWay(4, 130);
var_export($motorWay);

echo "<br>" . $truck->getStorage() . "<br>";
echo "<br>" . $camion->getStorage() . "<br>";

echo "<br>" . $truck->setStorage(255) . "<br>";
echo "<br>" . $camion->setStorage(25) . "<br>";

echo "<br>" . $truck->getStorage() . "<br>";
echo "<br>" . $camion->getStorage() . "<br>";

echo "<br>" . $camion->setStorage(25) . "<br>";
echo "<br>" . $camion->getStorage() . "<br>";
echo "<br>" . $camion->setStorage(25) . "<br>";
echo "<br>" . $camion->getStorage() . "<br>";
$car = new Car('blue', 4, 'fuel');


echo "<br>" . $car->start() . "<br>";
echo "<br>" . $car->forward(15) . "<br>";
echo "<br>" . "My current speed is " . $car->getCurrentSpeed() . "km/h" . "<br>";
echo "<br>" . $car->forward(30) . "<br>";
echo "<br>" . "My current speed is " . $car->getCurrentSpeed() . "km/h" . "<br>";
echo "<br>" . $car->forward(25) . "<br>";
echo "<br>" . "My current speed is " . $car->getCurrentSpeed() . "km/h" . "<br>";
echo "<br>" . $car->brake() . "<br>";


$bike = new Bike('green', 1, 2);
var_dump($bike);

$tandem = new Bike("white", 2, 2);
var_dump($tandem);

$monoWheel = new Bike("red", 1, 1);
var_dump($monoWheel);

echo "<br>" . $monoWheel->start() . "<br>";
echo "<br>" . $monoWheel->forward(5) . "<br>";
echo "<br>" . "My current speed is " . $monoWheel->getCurrentSpeed() . "km/h" . "<br>";
echo "<br>" . $monoWheel->forward(10) . "<br>";
echo "<br>" . "My current speed is " . $monoWheel->getCurrentSpeed() . "km/h" . "<br>";
echo "<br>" . $monoWheel->forward(15) . "<br>";
echo "<br>" . "My current speed is " . $monoWheel->getCurrentSpeed() . "km/h" . "<br>";
echo "<br>" . $monoWheel->brake() . "<br>";


$carNotAllowed = new Car('orange', 4, 'gasoline');
$carAllowed = new Car('multicolor', 4, 'electric');

var_dump($carNotAllowed);
var_dump($carAllowed);

$funBike = new Bike('red', 1);

$newPedestrianWay = new PedestrianWay(1, 10);

$newPedestrianWay->addVehicle($funBike);
var_dump($newPedestrianWay->getCurrentVehicles());
$newPedestrianWay->addVehicle($camion);

$newMotorWay = new MotorWay(4, 130);
$newMotorWay->addVehicle($camion);
$newMotorWay->addVehicle($truck);
$newMotorWay->addVehicle($funBike);
$newMotorWay->addVehicle($car);
var_dump($newMotorWay->getCurrentVehicles());



echo "Le nombre de v??hicule actuellement est de " . Vehicle::count();


