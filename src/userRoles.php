<?php 
require_once('users.php');

abstract class UserRoles implements Users{
	public $user=null;
	public $communication=null;
	public $dbms=null;


	public abstract function getType();

	public  function setUser(Users $obj){
		$this->user=$obj;
	}

	public function setDbms(Database $obj){
		$this->dbms=$obj;
	}

	public function setCommunication(Communication $obj){
		$this->communication=$obj;
	}

}