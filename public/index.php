<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bike.php';

$car = new Car('red', 4, 50);
var_dump($car);
var_dump($car->switchOn());
var_dump($car->switchOff());


$bicycle = new Bike('blue', 1);
$bicycle->setCurrentSpeed(4);
var_dump($bicycle);
var_dump($bicycle->switchOn());
var_dump($bicycle->switchOff());

$bicycle->setCurrentSpeed(20);
var_dump($bicycle->switchOn());
var_dump($bicycle->switchOff());

?>

</body>
</html>