<?php 
	require_once 'models/db_config.php';
	
$p_id="";
$err_p_id="";	
$p_type="";	
$err_p_type="";
$p_category="";
$err_p_category="";
$p_location="";
$err_p_location="";
$ads_name="";
$err_ads_name="";
$ads_price="";
$err_ads_price="";
$ads_desc="";
$err_ads_desc="";
$ads_image="";
$err_ads_image="";
$err_db="";
$err_db="";

$hasError=false;
$err_db="";

	if(isset($_POST["btn_search"])){
		require 'validations/searchPropertyValidation.php'; 
		
		if(!$hasError){
			if(searchProperties($p_location,$_POST["p_type"],$_POST["p_category"])){
				setcookie("searchhistory",$p_location,time()+60);
			$p_type=$_POST["p_type"];
			$p_category=$_POST["p_category"];	
			header("Location: searchResultProperty.php?p_location=$p_location&p_type=$p_type&p_category=$p_category");
			}
			else echo "No match found";
		}
	
	}
	if(isset($_POST["add_ads"])){
		echo "submiited";
		//doo validations
		//if no error
		
		/*$name = basename($_FILES["p_image"]["name"]);
		$ext = strtolower(pathinfo($name,PATHINFO_EXTENSION));
		$myfilename=uniqid().".$ext";
		$target = "storage/product_images/$myfilename";
		$tmp_path = $_FILES["p_image"]["tmp_name"];
		move_uploaded_file($tmp_path,$target);*/
		
		$fileType = strtolower(pathinfo(basename($_FILES["ads_image"]["ads_name"]),PATHINFO_EXTENSION));
		$target = "storage/ads_image/".uniqid().".$fileType";
		move_uploaded_file($_FILES["ads_image"]["tmp_ads_name"],$target);
		
		
		$rs = insertAds($_POST["ads_name"],$_POST["ads__price"],$_POST["ads_desc"],$_POST["ads_image"],$target);
		if($rs === true){
			header("Location: ad_table.php");
		}
		$err_db = $rs;
	
	}
	
	function insertAds($ads_name,$ads_price,$ads_desc,$ads_imgage){
		$query="insert into ads values (NULL,'$ads_name',$ads_id,$ads_price,'$ads_desc','$ads_image')";
		return execute($query);
	}
	function getad_table(){
		$query = "select * from ads";
		$rs = get($query);
		return $rs;
	}
	function getAds($ads_id){
		$query = "select * from ads where ads_id = $ads_id";
		$rs = get($query);
		return $rs[0];	
	}
	function updateAds($ads_name,$ads_id,$ads_price,$ads_desc,$ads_image)
	{
		$query = "update ads set ads_name='$ads_name', ads_price='$ads_price',ads_desc='$ads_desc',ads_image='$ads_image' where ads_id = $ads_id";
		return execute($query);
	}
	function searchProperties($p_location,$p_type,$p_category){
		$query= "select* from properties where p_location='$p_location' and p_type='$p_type' and p_category='$p_category' ";
		$rs = get($query);
		if(count ($rs)==0)return false;
		else return $rs[0];
	}
	
	function searchPropertiesList($p_location,$p_type,$p_category){
		$query= "select properties.*, householder.h_name from properties left join householder on properties.h_id=householder.h_id where p_location='$p_location'and p_type='$p_type' and p_category='$p_category'";
		
		$rs = get($query);
		return $rs; 
	}
	
	
	function getProperties(){
		$query= "select properties.*, householder.h_name from properties left join householder on properties.h_id=householder.h_id";
		
		$rs = get($query);
		return $rs;
	}
	
	function getPropertyDetails($p_id){
		$query= "select properties.*, householder.h_name from properties left join householder on properties.h_id=householder.h_id where p_id='$p_id'";
		
		$rs = get($query);
		return $rs;
	}
	
	function getCustomerWithUsername($c_uname){

		$query="select * from customer where c_uname='$c_uname'";
		$rs = get($query);
		return $rs[0];
	}
	
	function AjaxSearch($key){
		$query = "select * from properties where p_location like '%$key%'";
		$rs = get($query);
		return $rs;
	}
	function AjaxSearchEverything($key){
		$query = "select * from properties where p_type like '%$key%' or p_category like '%$key%' or p_area like '%$key%' or p_description like '%$key%' or c_uname like '%$key%' or p_location like '%$key%'";
		$rs = get($query);
		return $rs;
	}
	
	function bookingHistory($c_uname){
		$query= "select properties.*, householder.h_name from properties left join householder on properties.h_id=householder.h_id where c_uname='$c_uname'";
		
		$rs = get($query);
		return $rs;
	}
	
?>