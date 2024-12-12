<div class="container p-4  fw-bold" style="color:black;">
	<form action="<?=base_url()?>admin/save_testimonial" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center mb-4 ">Add Testimonial</h2>
			</div>
			<div class="col-md-6 mb-4">
				Select  Image
				<input type="file" name="testimonial_image" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Heading
				<input type="text" name="testimonial_heading" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Details
				<input type="text" name="testimonial_details" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Name
				<input type="text" name="testimonial_name" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Position
				<input type="text" name="testimonial_position" class="form-control">
			</div>

			<div class="col-md-12 text-center">
				<button class="btn btn-primary">Save Testimonial</button>
			</div>

		</div>
	</form>
</div>

<div class="container mt-3  border  p-5">
	<div class="row">
		<div class="col-md-12">
			<h2>Testimonial List</h2>

	<table class="table table-bordered table-hover">
        <tr>
        <th>Edit</th>
		<th>Delete</th>
		<th>SN</th>
		<th>Heading</th>
		<th>Details</th>
		<th>Name</th>
		<th>Position</th>
		<th>Image</th>
	</tr>
	<?php
	foreach($testimonial as $key => $row)
	{
		?>
		<tr>
			<td>
				<a href="<?=base_url()?>admin/edit_testimonial/<?=$row['testimonial_id']?>">
					<button class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button>
				</a>
			</td>
			<td>


				<a href="<?=base_url()?>admin/delete_testimonial/<?=$row['testimonial_id']?>">
					<button class="btn btn-danger btn-sm" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i></button>
				</a>
			</td>

			<td><?=$key+1?></td>
			<td><?=$row['testimonial_heading']?></td>
			<td><?=$row['testimonial_details']?></td>
			<td><?=$row['testimonial_name']?></td>
			<td><?=$row['testimonial_position']?></td>


			<td>
				<img src="<?=base_url()?>uploads/<?=$row['testimonial_image']?>" width="100px">

			</td>


		</tr>
		<?php
	}

	?>

	</table>
</div>
</div>
</div>
