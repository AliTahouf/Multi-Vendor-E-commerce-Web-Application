<?php

	session_start(); 
	$error=''; 
	if (isset($_POST['LOG IN'])) {
	if (empty($_POST['un']) || empty($_POST['password'])) {
		
		$error= ClearFields();
		
	}else{
		$un= $_POST['un'];
		$password= $_POST['password'];			
		
		// Injection protection
		$un = stripslashes($id);
		$password = stripslashes($password);
		
		$q="select * from user where un='".$un."'  
		AND password='".$password."'";
		
		$result=mysqli_query($con,$q);
		$rows=mysqli_num_rows($result);
		if($rows == 1) {
			$_SESSION['name']=$name; 
            $r=mysqli_fetch_array($result);
		}
		else { $error = "Username or Password is invalid";}
		 
		mysqli_close($con); 
	
	}
	
	function ClearFields(){
		$un = "";
		$password = "";
	}
}

?>