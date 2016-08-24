<?php

namespace Computer;

class Computer
{
	private $price;
	private $year;
	private $isNotebook;
	private $hardDiskMemory;
	private $freeMemory;
	private $operationSystem;
	
	public function __construct($price,$year,$isNoteBook,$hardDiskMemory,$freeMemory,$operationSystem)	
	{
		$this->price = $price;
		$this ->year = $year;
		$this-> isNotebook = $isNoteBook;
		$this ->hardDiskMemory = $hardDiskMemory;
		$this->freeMemory = $freeMemory;
		$this ->operationSystem= $operationSystem;
	}	
	
		public function getPrice()
		{
			return $this->price ;
		}
		
		public function setPrice($price)
		{
			return $this ->price = $price;
		}
		
		public function getYear()
		{
			return $this ->year ;
		}
		
		public function setYear($year)
		{
			return $this -> year = $year;
		}
		
		public function getIsNoteBook()
		{
		  return $this->isNotebook;
		}
     
		public function setIsNoteBook($isNoteBook)
		{
		  return $this ->isNotebook = $isNoteBook;
		}
		
		public function getHardDiskMemory()
		{
			return $this->hardDiskMemory;
			
		}
		
		public function setHardDiskMemory($hardDiskMemory)
		{
			return $this->hardDiskMemory = $hardDiskMemory;
		}
		
		public function getFreeMemory()
		{
			return $this ->freeMemory;
		}
		
		public function setFreeMemory($freeMemory)
		{
			return $this->freeMemory = $freeMemory;
		}
		
		public function getOperationSystem()
		{
			return $this ->operationSystem ;
		}
		
		public function setOperationSystem($operationSystem)
		{
			return $this->operationSystem = $operationSystem;
		}
		
		public function changeOperationSystem($value)
		{
			return $this->setOperationSystem($value);
		}
		
		public function useMemory($memory)
		{
			if ($this->getFreeMemory() < $memory) {
				 echo "Not enough memory".PHP_EOL;
			} else {
			$value = $this->getFreeMemory() -$memory;
			$this->setFreeMemory($value);
			}
		}

		public function getInformation()
		{
			return sprintf("this model has:price-> %d  year-> %d Is laptop?->%s hard disk memory->%s free memory->%s operation system->%s",	
					   		$this->getPrice(),
							$this->getYear(),
							$this->getIsNoteBook(),
							$this->getHardDiskMemory(),
							$this->getFreeMemory(),
							$this->getOperationSystem());
		}
	
}