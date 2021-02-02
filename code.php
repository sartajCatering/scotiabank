<?php
print_r($_POST);

include_once("DataConnection.php");

$action = isset($_POST["btn"])?$_POST["btn"]:"";

$uname = $pass = "";

	if($action=="Sign in")
	{
		$uname = isset($_POST["t1"])?trim($_POST["t1"]):"";
		$pass = isset($_POST["t2"])?trim($_POST["t2"]):"";
		
	
		//1. INSERT CODE ONLY
		if(!empty($uname) and !empty($pass))
		{
			$strInsert = "insert into userinfo(userId, password) values('$uname', '$pass') ";
			
			$result = mysqli_query($con,$strInsert);
			if($result==true)
			{
				header("location:index.php?msg=Record Inserted");
			}
			else
				header("location:index.php?msg=Record not Inserted");
			 
			if($uname=="Par" and $pass="123")
			{
				header("location:admin.php");
			}
			
			
		}
		else
			header("location:index.php?msg=Please Fill all the fields...");
			
	}
	else
		echo "There is some problem in Insert Code";
	
	
?>