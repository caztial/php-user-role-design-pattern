<?php
require_once('communication.php');

class Email implements Communication{
	public function getType(){
		return "Email";
	}
}