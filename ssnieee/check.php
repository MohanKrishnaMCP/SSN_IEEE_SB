<?php
session_start();
if(isset($_POST["password"])){
	$password=$_POST["password"];

	if($password=="ssnieee1234"){
		$_SESSION["auth"]="dog";
		include("dashboard.php");
	}
	else{
		echo "incorrect password";
	}
}
?>