<div class="container p-4 fw-bold " style="color:black;">
	<form action="<?=base_url()?>admin/save_services" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-12 mb-4">
				<h2 class="text-center mb-2 ">Add New  Services</h2>
			</div>
			<div class="col-md-6 mb-4">
				Select  Image
				<input type="file" name="services_image" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Title
				<input type="text" name="services_title" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Details
				<input type="text" name="services_details" class="form-control">
			</div>


			<div class="col-md-6 mb-4">
			  Enter Icon 
				<input type="text" name="services_icon" class="form-control">
			</div>


			<div class="col-md-12 text-center">
				<button class="btn btn-primary">Save Services</button>
			</div>

		</div>
	</form>
</div>

<div class="container mt-3  border  p-5">
	<div class="row">
		<div class="col-md-12">
			<h2>Slider</h2>

	<table class="table table-bordered table-hover">
        <tr>
		<th>Action</th>
		<th>SN</th>
		<th>Title</th>
		<th>Details</th>
		<th>Image</th>
	</tr>
	<?php
	foreach($services as $key => $row)
	{
		?>
		<tr>
			<td>
				<a href="<?=base_url()?>admin/edit_services/<?=$row['services_id']?>">
					<button class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button>
				</a>
				<a href="<?=base_url()?>admin/delete_services/<?=$row['services_id']?>">
					<button class="btn btn-danger btn-sm" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i></button>
				</a>
			</td>
			<td><?=$key+1?></td>
			<td><?=$row['services_title']?></td>
			<td><?=$row['services_details']?></td>
			<td>
				<img src="<?=base_url()?>uploads/<?=$row['services_image']?>" width="100px">

			</td>


		</tr>
		<?php
	}

	?>

	</table>
</div>
</div>
</div>
