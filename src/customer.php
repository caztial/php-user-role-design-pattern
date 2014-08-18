<?php 
require_once('userRoles.php');

class Customer extends UserRoles{
	public $customer="Customer Obj";
	public $communication=null;
	public $dbms=null;


	public function Customer(Visitor $visitor,Database $dbms, Communication $comm){
		// constructor
		$this->setUser($visitor);
		$this->setDbms($dbms);
		$this->setCommunication($comm);
	}

	public function getType(){
		return "I'm a Customer";
	}

}
