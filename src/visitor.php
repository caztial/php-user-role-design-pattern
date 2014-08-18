<?php 
require_once('users.php');

class Visitor implements Users{
	public $Visitor='Visitor Obj';
	public $communication=null;
	public $dbms=null;


	public function Visitor(Database $dbms, Communication $comm){
		$this->setDbms($dbms);
		$this->setCommunication($comm);
	}

	private function setDbms(Database $obj){
		$this->dbms=$obj;
	}

	private function setCommunication(Communication $obj){
		$this->communication=$obj;
	}

	public function login(){
		echo "Login function called..";
	}

	public function getType(){
		return "I'm a Visitor ";
	}
} 

