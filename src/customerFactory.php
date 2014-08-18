<?php
require_once('userFactory.php');

class CustomerFactory extends UserFactory{
	private static $visitor_obj;

	protected static function createUser($dbms=null,$comm=null){
		$dbms_obj= CustomerFactory::getDBMS($dbms);
		$comm_obj= CustomerFactory::getCommunication($comm);
		$customer=new Customer(CustomerFactory::$visitor_obj,$dbms_obj,$comm_obj);
	
		return $customer;
	} 

	public static function createCustomer($dbms=null,$comm=null,$vistor_parm=null){
		// visitor parm accespt an associative array with visitor VisitorFactory::createVisitor() parameters
		if(!is_null($vistor_parm)){
			if(get_class($vistor_parm)=='Visitor'){
				CustomerFactory::$visitor_obj=$vistor_parm;
			}
			else{
				if(is_array($vistor_parm)){
					CustomerFactory::$visitor_obj=VisitorFactory::createVisitor($vistor_parm['dbms'],$vistor_parm['comm']);
				}
				else{
					CustomerFactory::$visitor_obj=VisitorFactory::createVisitor();
				}
			}
			
		}else{
			CustomerFactory::$visitor_obj=VisitorFactory::createVisitor();
		}

		return CustomerFactory::createUser($dbms,$comm);
	}
}