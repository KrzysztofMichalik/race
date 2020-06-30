<?php
include_once __DIR__ . '/vendor/autoload.php';

use \Race\Game\Race;
use \Race\Game\Weather;
use \Race\Game\VehicleFactory;
use \Race\Game\VehicleBuilder;

$builder = new VehicleBuilder();

$weather = new Weather();

$race = new Race($weather);

$builder->setType(VehicleBuilder::CAR);
$builder->setName('car');
$builder->build();


$race->addVehicle(VehicleFactory::factory(VehicleFactory::CAR, 'abCD'));
$race->addVehicle(VehicleFactory::factory(VehicleFactory::CAR, 'CDEF'));
$race->addVehicle(VehicleFactory::factory(VehicleFactory::TRUCK, 'GHIJ'));
$race->addVehicle(VehicleFactory::factory(VehicleFactory::MOTORBIKE, 'ZAW4'));

$race->run();