<?php

abstract class UserFactory{
	protected abstract static function createUser($dbms=null,$comm=null);

	protected static function getDBMS($dbms=null){
		if(!is_null($dbms)){
			switch ($dbms) {
				case 'mysql':
					$dbms_obj= new Mysql();
					break;
				
				default:
					# code...
					break;
			}
		}else{
			$dbms_obj= new Mysql();
		}
		return $dbms_obj;
	} 

	protected static function getCommunication($comm=null){
		if(!is_null($comm)){
			switch ($comm) {
				case 'email':
					$comm_obj= new Email();
					break;
				
				default:
					# code...
					break;
			}
		}
		else{
			$comm_obj= new Email();
		}
		return $comm_obj;
	}
}