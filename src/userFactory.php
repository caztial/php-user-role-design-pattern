<?php

abstract class UserFactory{
	protected abstract static function createUser($dbms=null,$comm=null);

	protected static function getDBMS($dbms=null){
		if(!is_null($dbms)){
			switch ($dbms) {
				case 'mysql':
					$dbms_obj= Mysql::getInstance();
					break;
				
				default:
					# code...
					break;
			}
		}else{
			$dbms_obj= Mysql::getInstance();
		}
		return $dbms_obj;
	} 

	protected static function getCommunication($comm=null){
		if(!is_null($comm)){
			switch ($comm) {
				case 'email':
					$comm_obj= Email::getInstance();
					break;
				
				default:
					# code...
					break;
			}
		}
		else{
			$comm_obj= Email::getInstance();
		}
		return $comm_obj;
	}
}