<?php

namespace Employee;
use Task\Task;
class Employee 
{
	private $name;
	private $currentTask;
	private $hoursLeft;
	
	public function __construct($name)
	{
		$this->name = $name;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function setName($value)
	{
		if (!empty($value)) {
			return $this->name = $value;
		} else {
			echo "nevalid name try again";
		}
	}
	
	public function getCurrentTask()
	{
		return $this->currentTask;
	}
	
	public function setCurrentTask(Task $value)
	{
		return $this->currentTask = $value;
	}
	
	public function getHoursLeft()
	{
		return $this->hoursLeft;
	}
	
	public function setHoursLeft($value)
	{
		if ($value >= 0) {
			return $this->hoursLeft =$value;
		} else {
			echo "nevalid hours left";
		}
	}
	
	public function work()
	{
		if (!empty($this->getCurrentTask())) {
		$hourTask = $this->getCurrentTask()->getWorkingHour();
		 $leftHour = $this->getHoursLeft();
			 if ($hourTask > $leftHour) 
			 { 
			 	
			 	$hourTask = $hourTask-$leftHour;
			 	$this->setHoursLeft($leftHour);
			 	$this->getCurrentTask()->setWorkingHour($hourTask);
			    echo "working working...".PHP_EOL;
				echo " you dont have time for this task".PHP_EOL;
				echo "you need more " .$this->getCurrentTask()->setWorkingHour($hourTask).	
					 "hour for this task".PHP_EOL;
			 }
			 
			 if  ($hourTask <$leftHour) {
				 	
				 	$leftHour = $leftHour-$hourTask;
				 	$this->setHoursLeft($leftHour);
				 	$this->getCurrentTask()->setWorkingHour(0);
				   	echo "working working...".PHP_EOL;
				   	echo "you finish current task".PHP_EOL;
				  	 echo "you have only ".$this->getHoursLeft()."hours for working".PHP_EOL;
			 }
			 if ($hourTask == $leftHour) {
				 	 $this->setHoursLeft(0);
				 	 $this ->getCurrentTask()->setWorkingHour(0);
				 	 echo "working working".PHP_EOL;
				 	 echo "you finish current task and finish working day".PHP_EOL;
			 }
		} else {
			echo $this->getName()."doesnt have current task";
		}
	}
	
	public function showReport() 
	{
	   if (!empty($this->getCurrentTask())) {
	   	 return  sprintf("name employee: %s",$this->getName()).PHP_EOL.
			   	  sprintf("name of the current Task: %s",$this->getCurrentTask()->getName()).PHP_EOL.
			   	  sprintf("working hours left:%d",$this->getHoursLeft()).PHP_EOL.
			   	  sprintf("working hours for current task: %d",$this->getCurrentTask()->getWorkingHour());
// 	   	 		$this->getName(),
// 	   	 		$this->getCurrentTask()->getName(),
// 	   	 		$this->getHoursLeft(),
// 	   	 		$this->getCurrentTask()->getWorkingHour());
	   	 		 
	   }
	}
}