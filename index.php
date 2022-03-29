<?php

require_once 'Car.php';
require_once 'Bicycle.php';

$bike = new Bicycle('blue', 1, 2);
$car = new Car('blue', 5, 'fuel');



var_dump($car);
var_dump($bike);