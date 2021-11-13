<?php

require_once "Car.php";
require_once "Bus.php";
require_once "Bike.php";
require_once "SkateBoard.php";
require_once "PedestrianWay.php";
require_once "LightableInterface.php";

$car = new Car('black', 4);
$bike = new Bike('red', 2);
$schoolBus = new Bus('yellow', 40);
$skateBoard = new SkateBoard('pink', 2);

$pedestrianWay = new PedestrianWay();

var_dump ("Au tout début",$pedestrianWay->getCurrentVehicles());

var_dump ("tentative d'ajout de voiture(doit échouer)");
$pedestrianWay->addVehicle($car);
var_dump($pedestrianWay->getCurrentVehicles());

var_dump ("tentative d'ajout de voiture(doit réussir)");
$pedestrianWay->addVehicle($bike);
var_dump ($pedestrianWay->getCurrentVehicles());




$car = new Car('green', 4, 'electric');

// Test sans le frein à main mis au départ

try{
    echo $car->start() . '</br>';
}
catch (Exception $e)
{
    echo $e->getMessage() . '</br>';
    echo $car->setParkBrake() . '</br>';
}
finally
{
    echo "Ma voiture roule comme un donut.</br>";
}


echo '</br>';


echo $car->setParkBrake();

try{
    echo $car->start() . '</br>';
}
catch (Exception $e)
{
    echo 'Warning: ' . $e->getMessage() . '</br>';
    echo $car->setParkBrake() . '</br>';
}
finally
{
    echo "Ma voiture roule comme un donut.</br>";
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

</body>
</html>
