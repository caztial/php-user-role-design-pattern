<?php
require_once("userFactory.php");

class AdminFactory extends UserFactory{
	private static $visitor_obj;
	private static $customer_obj;

	protected static function createUser($dbms=null,$comm=null){
		$dbms_obj= AdminFactory::getDBMS($dbms);
		$comm_obj= AdminFactory::getCommunication($comm);
		$customer=Admin::getInstance(AdminFactory::$customer_obj,$dbms_obj,$comm_obj);
	
		return $customer;
	} 

	public static function createAdmin($dbms=null,$comm=null,$customer_parm=null,$vistor_parm=null){
		// visitor parm accespt an associative array with visitor VisitorFactory::createVisitor() parameters
		if(!is_null($vistor_parm)){
			if(get_class($vistor_parm)=='Visitor'){
				AdminFactory::$visitor_obj=$vistor_parm;
			}
			else{
				if(is_array($vistor_parm)){
					AdminFactory::$visitor_obj=VisitorFactory::createVisitor($vistor_parm['dbms'],$vistor_parm['comm']);
				}
				else{
					AdminFactory::$visitor_obj=VisitorFactory::createVisitor();
				}
			}
			
		}else{
			AdminFactory::$visitor_obj=VisitorFactory::createVisitor();
		}

		if(!is_null($customer_parm)){
			if(get_class($customer_parm)=='Customer'){
				AdminFactory::$customer_obj=$customer_parm;
			}
			else{
				if(is_array($customer_parm)){
					AdminFactory::$customer_obj=CustomerFactory::createCustomer($customer_parm['dbms'],$customer_parm['comm'],AdminFactory::$visitor_obj);
				}
				else{
					AdminFactory::$customer_obj=CustomerFactory::createCustomer(null,null,AdminFactory::$visitor_obj);
				}
			}
			
		}else{
			AdminFactory::$customer_obj=CustomerFactory::createCustomer(null,null,AdminFactory::$visitor_obj);
		}

		return AdminFactory::createUser($dbms,$comm);
	}
}
