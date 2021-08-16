<?php
	$h_id="";
	$err_h_id="";
	$h_name="";
	$err_h_name="";
	$h_uname="";
	$err_h_uname="";
	$h_pass="";
	$err_h_pass="";
	$h_dob="";
	$err_h_dob="";
	$h_gender="";
	$err_h_gender="";
	$h_email="";
	$err_h_email="";
	$h_address="";
	$err_h_address="";
	$h_phone="";
	$err_h_phone="";
	$h_nid="";
	$err_h_nid="";
	$err_db="";
	$err_db="";
	require_once 'models/db_config.php';
	if(isset($_POST["add_householder"])){

		$rs = insertHouseholder($_POST["h_name"],$_POST["h_uname"],$_POST["h_pass"],$_POST["h_dob"],$_POST["h_gender"],$_POST["h_email"],$_POST["h_address"],$_POST["h_phone"],$_POST["h_nid"]);
		if($rs === true){
			header("Location: householder_table.php");
		}
		$err_db = $rs;
		
	}
	else if (isset($_POST["edit_householder"])){

		$rs = updateHouseholder($_POST["h_name"],$_POST["h_id"],$_POST["h_uname"],$_POST["h_pass"],$_POST["h_dob"],$_POST["h_gender"],$_POST["h_email"],$_POST["h_address"],$_POST["h_phone"],$_POST["h_nid"]);
		if($rs === true){
			header("Location: householder_table.php");
		}
		$err_db = $rs;
	}
	
	function insertHouseholder($h_name,$h_uname,$h_pass,$h_dob,$h_gender,$h_email,$h_address,$h_phone,$h_nid){
		$query="insert into householder values (NULL,'$h_name','$h_uname','$h_pass','$h_dob','$h_gender','$h_email','$h_address','$h_phone','$h_nid')";
		return execute($query);
	}
	
	function gethouseholder_table(){
		$query = "select * from householder";
		$rs = get($query);
		return $rs;
	}
	function getHouseholder($h_id){
		$query = "select * from householder where h_id = $h_id";
		$rs = get($query);
		return $rs[0];	
	}
	function updateHouseholder($h_name,$h_id,$h_uname,$h_pass,$h_dob,$h_gender,$h_email,$h_address,$h_phone,$h_nid)
	{
		$query = "update householder set h_name='$h_name',h_uname='$h_uname',h_pass='$h_pass',h_dob='$h_dob',h_gender='$h_gender',h_email='$h_email',h_address='$h_address',h_phone='$h_phone',h_nid='$h_nid' where h_id = $h_id";
		return execute($query);
	}
	function getHouseholder($h_id){
		$query = "select * from householder where h_id='$h_id'";
		$rs = get($query);
		return $rs[0];
		
	}
?>