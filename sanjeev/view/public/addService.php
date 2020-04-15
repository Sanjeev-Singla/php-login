<br><br>
<div class="container">
	<?php if(isset($_SESSION['msg'])):?>
		<p class="text-<?=$_SESSION['class']?>"><?=$_SESSION['msg']?></p>
	<?php endif;?><br>
	<p><span class="text-danger">* required field</span></p>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		<div class="form-group">
			<label for="name">Name:</label><span class="text-danger">*</span>
			<input type="text" class="form-control" placeholder="Enter Name" name="name">
			<p id="nameError" class="text-danger"><?php echo $nameErr;?></p>
		</div>
		<div class="form-group">
			<label for="email">Email:</label><span class="text-danger">*</span>
			<input type="email" class="form-control" placeholder="Enter email" name="email">
			<p id="emailError" class="text-danger"><?php echo $emailErr;?></p>
		</div>
		<div class="form-group">
			<label for="phone">Phone:</label><span class="text-danger">*</span>
			<input type="text" class="form-control" placeholder="Enter Phone" name="phone">
			<p id="phoneError" class="text-danger"><?php echo $phoneErr;?></p>
		</div>
		<div id="addservice" class="form-group">
			<label for="service">Service:</label><span class="text-danger">*</span>
			<div class="row">
				<div class="col-md-11">
					<input type="text" class="form-control" placeholder="Enter Service" name="service[]">
					<p id="serviceError" class="text-danger"><?php echo $serviceErr;?></p>
				</div>
				<div class="col-md-1">
					<a id="addmoreservice" class="btn btn-lg btn-primary text-lg">+</a>
				</div>
			</div>
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>