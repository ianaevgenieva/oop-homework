<?php

namespace Gsm;
use Call\Call;


class Gsm
{
	private $model;
	private $hasSimCard ;
	private $simMobileNumber;
	private $outGoingCallDuration=0;
	private $lastIncomingCall ;
	private $lastOutcomingCall;

	public function __construct($model)
	{
		$this->model = $model;
	}

	public function getHasSimCard()
	{
		return $this->hasSimCard;
	}
	
	public function setHasSimCard($value)
	{
		return $this->hasSimCard=$value;
	}
	
	public function getSimMobileNumber()
	{
		return $this->simMobileNumber;
	}
	
	public function setSimMobileNumber($value)
	{
		return $this->simMobileNumber =$value;
	}
	
	public function getOutGoingCallDuration()
	{
		return $this->outGoingCallDuration;
	}
	
	public function setOutGoingCallDuration($value)
	{
		return $this->outGoingCallDuration =$value;
	}
	
	public function  getLastOutcomingCall()
	{
		return $this->lastOutcomingCall;
	}
	
	public function setLastOutcomingCall($value)
	{
		return $this->lastOutcomingCall=$value;
	}
	
	public function getLastIncomingCall()
	{
		return $this->lastIncomingCall;
	}
	
	public function setLastIncomingCall($value)
	{
		return $this->lastIncomingCall=$value;
	}
	
	public function insertSimCard($simMobileNumber)
	{
	    $number = $this->simMobileNumber = $simMobileNumber;
		$pattern = "/08[7-9][1-9][0-9]{6}/";
		
		if (strlen($number) != 10 && !preg_match($pattern, $number)){
			echo "cant insert this number";
			
		} else {
			
			$this->setHasSimCard(true);
			echo "set card".PHP_EOL;
		}
	}

	public function removeSimCard()
	{
		$this->setHasSimCard(false);
		echo "Remove sim card".PHP_EOL;
	}
	
public function call($receiver, $duration)
	{
		$numberCall = $this->getSimMobileNumber();
		$numberReceive = $receiver->getSimMobileNumber();
		$isNumberCall = $this->getHasSimCard();
		$isNumberReceive =$receiver->getHasSimCard();
		$numberDuration=$this->getOutGoingCallDuration();
		
		if (($duration > 0 && $duration< 120)&&	
				($numberReceive != $numberCall)&&	
				($isNumberReceive ==1 && $isNumberCall==1)){
		
		         $receiver->setLastIncomingCall("last incomming call:".$duration."min");
				 $this->setLastOutcomingCall("last out call:".$duration."min");
				 $this->setOutGoingCallDuration($numberDuration+=$duration);
		         echo"ring ring".PHP_EOL;
	} else {
		echo "cannot make ring ring".PHP_EOL; 
		
	}
  }
  
  public function getSumForCall($price)
  {
	$minute = $this->getOutGoingCallDuration();
  	$sumForMinute = $minute * $price;
  	echo "you must paid->". $sumForMinute." lv";
  }
  
  //function printInfoForTheLastOutgoingCall()
  public function printInfoForTheLastOutgoingCall()
  {
	  	if ($this->getLastOutcomingCall() != null){
	  		echo "Info about last outcoming call->".
	  		$this->getLastOutcomingCall();
	  } else {
	  	 echo "dont havw last outcoming call";
	  }
  }
  
   public function printInfoForTheLastIncomingCall()
   {
	   	if ($this->getLastIncomingCall() != null){
	  	 	echo "Info about last incoming call->>".
	     	$this->getLastIncomingCall();
	   } else {
	   	 echo "dont have last incoming call";
	   }
   }
   
}