<?php
require_once('database.php');
class Mysql implements Database{

	public function checkLogin($username,$password){
		echo "Username or Password is Invalid";
	}

	public function addUser($userDataArray){
		echo "Error Adding User to the mysql database";
	}
}