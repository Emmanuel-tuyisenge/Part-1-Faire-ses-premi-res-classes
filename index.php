<?php

require_once 'bicycle.php';
require 'Car.php';


$bike = new Bicycle('black');
//$bike->currentSpeed = 0;
//var_dump($bike);
echo '<br>';
//var_dump($bike);
//$bike->dump();


echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();


echo '<br>';
echo '<br>';


$car = new Car('pink',4, 'essence');
//$car->nbWheels = 4;

//var_dump($car);

echo $car->forward();
echo '<br> Vitesse du voiture : ' . $car->currentSpeed . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse du voiture : ' . $car->currentSpeed . ' km/h' . '<br>';
echo $car->brake();


