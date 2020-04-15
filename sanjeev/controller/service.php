
<?php
	require_once '../database/database.php';
	$db = new database();
	if (!isset($_SESSION['admin_id'])) {
		header("location:http://localhost/sanjeev/admin");
	}
	$data = $db->get_all('services');
?>

<?php include "../view/common/header.php"; ?>
<?php include "../view/admin/services.php"; ?>
<?php include "../view/common/footer.php"; ?>