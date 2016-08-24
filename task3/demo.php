<?php
use Task\Task;
use Employee\Employee;
require_once 'autoload.php';


$task1 = new Task("chistq",5);


$employ = new Employee("dancho");
$employ->setCurrentTask($task1);
$employ->setHoursLeft(2);
echo $employ->work();
echo $employ->showReport();
