<?php

	//header("location:http://localhost/sanjeev/controller/addService.php");
	$requestURL = $_SERVER['REQUEST_URI'];
	if ($requestURL == "/sanjeev/") {
		header("location:http://localhost/sanjeev/controller/addService.php");
	}elseif ($requestURL == "/sanjeev/admin") {
		header("location:http://localhost/sanjeev/controller/admin.php");
	}
	
?>