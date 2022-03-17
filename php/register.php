<?php
  if (isset($_POST['Register'])) {
	$em = $_POST['em'];
	$pass=$_POST['pass'];
	$fn = $_POST['fn'];
	$ln = $_POST['ln'];
	$sn = $_POST['sn'];
	$su = $_POST['su'];
	$pn = $_POST['pn'];	
	$t = $_POST['type'];
	
	
	if (empty($em)){
		echo "Please Fill Out This Field !";
	}else
	if (empty($fn)){
		echo "Please Fill Out This Field !";
	}else
	if (empty($ln)){
		echo "Please Fill Out This Field !";
	} else
	if (empty($sn)){
		echo "Please Fill Out This Field !";	
    	
	}else 
		if (empty($su)){
		echo "Please Fill Out This Field !";
	}else
	if (empty($pn)){
		echo "Please Fill Out This Field !";	
	}else 
		
	if  (!empty($em) || !empty($fn) || !empty($ln) || !empty($sn)!empty($su) || !empty($pn)){
		
		if(strcmp($t,"i am customer")==0){
			$q="insert into user values('$em','$pass')";
		$result=mysqli_query($con,$q) ;
		}
			if(strcmp($t,"i am vendor")==0){
			$q="insert into user values('$em','$pass','$fn','$ln','$sn','$su','$pn')";
		$result=mysqli_query($con,$q) ;
		}
		   
		
	}
}
?>