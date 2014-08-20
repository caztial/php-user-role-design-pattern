<?php
require_once('communication.php');

class Email implements Communication{
	public static $uniqueInstance;

	public static function getInstance(){
		if (!is_object(Email::$uniqueInstance)) {
			Email::$uniqueInstance=new Email();
		}
		return Email::$uniqueInstance;
	}

	private function Email(){}

	public function getType(){
		return "Email";
	}
}