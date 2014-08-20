<?php 
require_once('users.php');

class Visitor implements Users{
	public static $uniqueInstance;
	public $Visitor='Visitor Obj';
	public $communication=null;
	public $dbms=null;

	public static function getInstance(Database $dbms, Communication $comm){
		if(!is_object(Visitor::$uniqueInstance)){
			Visitor::$uniqueInstance=new Visitor($dbms,$comm);
		}
		return Visitor::$uniqueInstance;
	}

	private function Visitor(Database $dbms, Communication $comm){
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

