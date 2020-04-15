<?php
	require_once '../database/database.php';
	$db = new database();
	unset($_SESSION['msg']);
	unset($_SESSION['class']);
	$nameErr = $emailErr = $phoneErr = $serviceErr = "";
	$name = $email = $phone = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		# validate the name
		if (empty($_POST["name"])) {
			$nameErr = "Name is required";

		} else {
			$name = secure($_POST["name"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
				$nameErr = "Only letters and white space allowed";
			}
		}

		# validate the email
		if (empty($_POST["email"])) {
			$emailErr = "Email is required";
		} else {
			$email = secure($_POST["email"]);
			$data = $db->get_single("services","email",$email);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Invalid email format";
			}elseif ($data) {
				$emailErr = "This Email Id already exists";
			}
		}

		# validate the phone
		if (empty($_POST["phone"])) {
			$phoneErr = "Phone is required";
		} else {
			$phone = secure($_POST["phone"]);
			if (!preg_match("/^[0-9]*$/",$phone)) {
				$phoneErr = "Only Numerics are allowed";
			}elseif(strlen($phone)<10 || strlen($phone)>10){
				$phoneErr = "Phone number length must be 10";
			}
		}

		# validate the services
		if (!$_POST["service"]) {
			$serviceErr = "Service is required";
		} else {
			$service = secure(implode(",", $_POST["service"]));
		}

		$ip = getip();

		if (!empty($name) && !empty($email) && !empty($phone) && !empty($ssssservice)) {
			$interted = $db->insert("services",$name,$email,$phone,$service,$ip);
		}else{
			$interted = FALSE;
		}

		if ($interted == TRUE) {
			$_SESSION['msg'] 	= "Data Inserted Successfully";
			$_SESSION['class'] 	= "success";
		}else{
			$_SESSION['msg'] 	= "Error! Unable to Add";
			$_SESSION['class'] 	= "danger";
		}
		
	}

	function secure($data) {
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}

	# Get the server ip
	function getip() {  
	    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
	        $ip = $_SERVER['HTTP_CLIENT_IP'];  
	    }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
	        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
	    }else{  
	        $ip = $_SERVER['REMOTE_ADDR'];  
	    }  
	    return $ip;  
	}
?>
<?php include "../view/common/header.php"; ?>
<?php include "../view/public/addService.php"; ?>
<?php include "../view/common/footer.php"; ?>
