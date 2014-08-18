<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
foreach (glob("src/*.php") as $filename)
{
    require_once($filename);
}


$visitor=VisitorFactory::createVisitor();
$customer= CustomerFactory::createCustomer();
$user= AdminFactory::createAdmin();

echo "<pre>";
var_dump($user);
