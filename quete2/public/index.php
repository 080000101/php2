<?php

require __DIR__ . '/../vendor/autoload.php';

USE App\Wcs\Hello;

$test = new Hello();

echo $test ->talk();


