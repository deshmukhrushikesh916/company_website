<div class="container mt-3  border  p-5">
	<div class="row">
		<div class="col-md-12 text-center">
			<h2 class="mb-4">Contact List</h2>

	<table class="table table-bordered table-hover">
        <tr>
        	<th>Sn</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Subject</th>
		<th>Message</th>

	</tr> 
	<?php
	foreach($contact as $key => $row)
	{
		?>
		<tr>
			<td><?=$key+1?></td>
			<td><?=$row['name']?></td>
			<td><?=$row['email']?></td>
			<td><?=$row['phone']?></td>
			<td><?=$row['subject']?></td>
			<td><?=$row['message']?></td>


			


		</tr>
		<?php
	}

	?>

	</table>
</div>
</div>
</div>