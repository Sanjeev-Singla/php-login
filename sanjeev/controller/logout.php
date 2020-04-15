<?php
	session_start();
	if (isset($_SESSION['admin_id'])) {
		session_destroy();
		header("location:http://localhost/sanjeev/admin");
	}
?>