<?php 
require_once('userRoles.php');

class Customer extends UserRoles{
	public static $uniqueInstance;
	public $customer="Customer Obj";

	public static function getInstance(Visitor $visitor,Database $dbms, Communication $comm){
		if(!is_object(Customer::$uniqueInstance)){
			Customer::$uniqueInstance=new Customer($visitor,$dbms,$comm);
		}
		return Customer::$uniqueInstance;
	}

	private function Customer(Visitor $visitor,Database $dbms, Communication $comm){
		// constructor
		$this->setUser($visitor);
		$this->setDbms($dbms);
		$this->setCommunication($comm);
	}

	public function getType(){
		return "I'm a Customer";
	}

}
