<?php

require_once __DIR__ . '/vendor/autoload.php';

use myProject\Catalog;
use myProject\Cars;
use myProject\Trucks;

$cars = new Cars();
$cars->setMarka('Honda');
$cars->setModel('Accord');
$cars->setYear(2007);
$cars->setVin('5NPEB4AC2BH175656');
$cars->setEquipment('Executive');


$cars2 = new Cars();
$cars2->setMarka('Toyota');
$cars2->setModel('Camry');
$cars2->setYear(2018);
$cars2->setVin('5NPEB4CC2BH17665!');
$cars2->setEquipment('Basik');

$trucks = new Trucks();
$trucks->setMarka('Volvo');
$trucks->setModel('FM 13');
$trucks->setYear(2010);
$trucks->setVin('5NPEB4AC2BH175551');
$trucks->setCarrying('24T');


$catalog = new Catalog();
$catalog->addTranspotr($cars);
$catalog->addTranspotr($trucks);
$catalog->addTranspotr($cars2);
$catalog->showTransport();

