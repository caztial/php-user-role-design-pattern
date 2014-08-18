<?php 
require_once('userRoles.php');

class Admin extends UserRoles{
	public $admin="Admin Obj";

	public function Admin(Customer $customer,Database $dbms, Communication $comm){
		// constructor
		$this->setUser($customer);
		$this->setDbms($dbms);
		$this->setCommunication($comm);
	}

	public function getType(){
		return "I'm an Admin type User";
	}

	
}
