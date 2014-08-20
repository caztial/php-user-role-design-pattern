<?php
require_once('database.php');
class Mysql implements Database{
	public static $uniqueInstance;

	public static function getInstance(){
		if (!is_object(Mysql::$uniqueInstance)) {
			Mysql::$uniqueInstance=new Mysql();
		}
		return Mysql::$uniqueInstance;
	}

	private function Mysql(){}

	public function checkLogin($username,$password){
		echo "Username or Password is Invalid";
	}

	public function addUser($userDataArray){
		echo "Error Adding User to the mysql database";
	}
}