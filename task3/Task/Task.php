<?php

namespace Task;

class Task 
{
	private $name;
	private $workingHour;
	
	public function __construct($name,$workingHour)
	{
		$this->name = $name;
		$this->workingHour = $workingHour;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function setName($value)
	{
		return $this->name = $value;
	}
	
	public function getWorkingHour()
	{
		return $this->workingHour;
	}
	
	public function setWorkingHour($value)
	{
		return $this->workingHour = $value;
	}
}