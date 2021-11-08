<?php


require_once 'SimpsonsCars.php';
$car = new SimpsonsCars("blue", 4, "electric");

$car->setHasParkBrake(true);

try {
    $car->start();
}   catch (Exception $exception) {
    $car->setHasParkBrake(false);
    echo $exception->getMessage();
} finally {
    echo "Ma voiture roule comme un donut";
}




