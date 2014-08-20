<?php 
require_once('userFactory.php');
class VisitorFactory extends UserFactory{
	protected static function createUser($dbms=null, $comm=null){
		
		$dbms_obj= VisitorFactory::getDBMS($dbms);
		$comm_obj= VisitorFactory::getCommunication($comm);
		$visitor=Visitor::getInstance($dbms_obj,$comm_obj);
		return $visitor;
	}

	public static function createVisitor($dbms=null,$comm=null){
		return VisitorFactory::createUser($dbms,$comm);;
	}
}