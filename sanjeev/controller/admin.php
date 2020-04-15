<?php
	require_once '../database/database.php';
	$db = new database();
	unset($_SESSION['msg']);
	unset($_SESSION['class']);
	
	if (isset($_SESSION['admin_id'])) {
		header("location:http://localhost/sanjeev/controller/service.php");
	}

	$usernameErr = $passwordErr = "";
	$username = $password = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		# validate the name
		if (empty($_POST["username"])) {
			$usernameErr = "Username is required";
		} else {
			$username = $_POST["username"];
		}

		# validate the email
		if (empty($_POST["password"])) {
			$passwordErr = "Password is required";
		} else {
			$password = $_POST["password"];
		}

		$admin = $db->get_single('admin',"username",$username);
		if ($admin) {
			if ($password == $admin['password']) {
				$_SESSION['admin_id'] = $admin['id'];
				header("location:http://localhost/sanjeev/controller/service.php");
			}else{
				$passwordErr = "Wrong password Entered";
			}
		}else{
			$_SESSION['msg'] 	= "This username doesn't exist";
			$_SESSION['class'] 	= "danger";
		}
		
	}
	
?>

<?php include "../view/common/header.php"; ?>
<?php include "../view/admin/adminLogin.php"; ?>
<?php include "../view/common/footer.php"; ?>