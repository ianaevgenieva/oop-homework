<?php

namespace Call;

class Call
{
	private $priceForMinute = 1;
	private $caller;
	private $receiver;
	private $duration;
	
	public function __construct($caller,$receiver,$duration)
	{
		$this->caller = $caller;
		$this->receiver = $receiver;
		$this->duration = $duration;
	}
	
	public function getPriceForMinute()
	{
		return $this->priceForMinute;
	}
	
	public function setPriceForMinute($value)
	{
		return $this->priceForMinute = $value;
	}
	
	public function getCaller()
	{
		return $this->caller;
	}
	
	public function setCaller($value)
	{
		return $this->caller = $value;
	}
	
	public function getReceiver()
	{
		return $this->receiver;
	}
	
	public function setReceiver($value)
	{
		return $this->receiver = $value;
	}
	
	public function getDuration()
	{
		return $this->duration;
	}
	
	public function setDuration($value)
	{
		if ($value > 0 && $value < 120) {
			return $this->duration = $value;
		} else {
			echo "nevalid duration try again".PHP_EOL;
		}
	}
	
	
}
