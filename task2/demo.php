<?php

use Call\Call;
use Gsm\Gsm;
require_once 'onload.php';


$gsm1  = new Gsm("samsung");
$gsm1->insertSimCard("0877203332");
 
$gsm2 = new Gsm ("nokia");
echo $gsm2->insertSimCard("0858887841");
$call = new Call($gsm1,$gsm2,4);
echo $gsm1->call($gsm2,$call->getDuration()).PHP_EOL;
echo $gsm2->getLastIncomingCall().PHP_EOL;
echo $gsm1->getLastOutcomingCall().PHP_EOL;
echo $gsm1->getOutGoingCallDuration().PHP_EOL;

$call1 = new Call($gsm1,$gsm2,5);
echo $gsm1->call($gsm2,$call1->getDuration()).PHP_EOL;
echo $gsm2->getLastIncomingCall().PHP_EOL;
echo $gsm2->getLastOutcomingCall().PHP_EOL;
echo $gsm1->getOutGoingCallDuration().PHP_EOL;

echo $gsm1->getSumForCall($call1->getPriceForMinute()).PHP_EOL;
echo $gsm1->printInfoForTheLastOutgoingCall().PHP_EOL;
echo $gsm1->printInfoForTheLastIncomingCall().PHP_EOL;

