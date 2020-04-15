<br><br>
<div class="container">
	<?php if(isset($_SESSION['msg'])):?>
		<p class="text-<?=$_SESSION['class']?>"><?=$_SESSION['msg']?></p>
	<?php endif;?><br>
	<p><span class="text-danger">* required field</span></p>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		<div class="form-group">
			<label for="email">Username:</label><span class="text-danger">*</span>
			<input type="text" class="form-control" placeholder="Enter email" name="username">
			<p id="usernameError" class="text-danger"><?php echo $usernameErr;?></p>
		</div>
		<div class="form-group">
			<label for="phone">Password:</label><span class="text-danger">*</span>
			<input type="password" class="form-control" placeholder="Enter Password" name="password">
			<p id="passwordError" class="text-danger"><?php echo $passwordErr;?></p>
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>