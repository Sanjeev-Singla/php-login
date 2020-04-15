<br><br><br>
<div class="container">
	<a href="http://localhost/sanjeev/controller/logout.php" class="btn btn-info pull-right">Logout</a><br><br>
	<table id="example" class="table table-striped table-bordered" style="width:100%">
		<thead>
			<tr>
				<th>Name</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Services</th>
			</tr>
		</thead>
		<tbody>
			<?php while($row = $data->fetch_assoc()):?>
			<tr>
				<td><?=$row['name']?></td>
				<td><?=$row['phone']?></td>
				<td><?=$row['email']?></td>
				<td><?=$row['services']?></td>
			</tr>
			<?php endwhile;?>
		</tbody>
		<tfoot>
			<th>Name</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Services</th>
		</tfoot>
	</table>
</div>

