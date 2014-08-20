<?php 
require_once('userRoles.php');

class Admin extends UserRoles{
	public static $uniqueInstance;
	public $admin="Admin Obj";

	public static function getInstance(Customer $customer,Database $dbms, Communication $comm){
		if(!is_object(Admin::$uniqueInstance)){
			Admin::$uniqueInstance=new Admin($customer,$dbms,$comm);
		}
		return Admin::$uniqueInstance;
	}

	private function Admin(Customer $customer,Database $dbms, Communication $comm){
		// constructor
		$this->setUser($customer);
		$this->setDbms($dbms);
		$this->setCommunication($comm);
	}

	public function getType(){
		return "I'm an Admin type User";
	}

	
}
