<?php

use Computer\Computer;
require_once "onload.php";

$obj = new Computer(1000,2009,"false","8gb","250gb","windows");
$obj1 = new Computer(1000,2009,"true","8gb","250gb","windows");
$obj ->changeOperationSystem("Linux");
$obj1->useMemory(49);

echo  $obj->getInformation().PHP_EOL;
echo $obj1->getInformation();