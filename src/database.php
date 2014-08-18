<?php 

interface Database{

	public function checkLogin($username,$password);

	public function addUser($userDataArray);
	
}