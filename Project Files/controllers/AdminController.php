<?php
require_once 'models/db_config.php';
session_start();
	include_once 'model/webtech_final_project.php';
	
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$confirm_pass="";
	$err_confirm_pass="";
	$email="";
	$err_email="";
	$gender="";
	$err_gender="";
	$phone="";
	$err_phone="";
	$nid="";
	$err_nid="";
	$address="";
	$err_address="";
	$dob="";
	$err_dob="";
	$err_db="";
	$hasError=false;

	if(isset($_POST["sign_up"])){
	if(empty($_POST["name"]))
	{
		$hasError = true;
		$err_name = "Name required";
	}
	else if(strlen($_POST["name"])<= 2)
	{
		$hasError = true;
		$err_name = "Name must be greater than 2 characters";
	}
	else
	{
		$name = $_POST["name"];
	}
	
	    if(empty($_POST["uname"]))
   {
	  $hasError=true; 
	  $err_uname="User name required";
   }
   elseif(strlen($_POST["uname"])<6)
   {
	  $hasError=true;  
	  $err_uname="User name Must be at least 6 characters";
   }
   else
   {
	 $uname=$_POST["uname"];  
	 
   }
   	if(empty($_POST["pass"]))
	{
		$hasError = true;
		$err_pass = "Password required";
	}

	else if((strlen($_POST["pass"])< 8))
	{
		$hasError = true;
		$err_pass = "Password requires minimum 8 characters";
	}
	if((strlen($_POST["pass"])>= 8))
	{
	
	$passvariable = $_POST["pass"];
	$uppercase = preg_match('@[A-Z]@',$passvariable);
	$lowercase = preg_match('@[a-z]@',$passvariable);
	if(!$uppercase)
	{
	$hasError = true;
	$err_pass = "Password requires uppercase letters";
	}
	else if(!$lowercase)
	{
	$hasError = true;
	$err_pass = "Password requires lowercase letters";
	}
	if(strpos($_POST["pass"],'#') == false && (strpos($_POST["pass"],'?') == false))
	{
		$hasError = true;
		$err_pass = "Password requires minimum 1 '#' and '?'";
	}
	
	
	else
	{
		$pass = $_POST["pass"];
	}
	function getNotices(){
		$query= "select* from admin";
		
		$rs = get($query);
		return $rs;
	}
	function insertUser($name,$uname,$pass,$email,$gender,$phone,$nid,$address,$dob){
		echo $name;
		echo $uname;
		echo $pass;
		echo $email;
		echo $gender;
		echo $phone;
		echo $nid;
		echo $address;
		echo $dob;
		$query = "insert into admin values (NULL,'$name','$uname','$pass','$email','$gender','$phone','$nid','$address','$dob')";
		return execute($query);
		
	}
	function authenticateUser($uname,$pass){
		$query = "select * from admin where uname='$uname' and pass='$pass'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
		
	}
?>