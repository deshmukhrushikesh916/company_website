<div class="container p-4  fw-bold" style="color:black;">
	<form action="<?=base_url()?>admin/save_project" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center mb-4">Add New  Project</h2>
			</div>
			<div class="col-md-6 mb-4">
				Select  Image
				<input type="file" name="project_image" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Heading
				<input type="text" name="project_heading" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Details
				<input type="text" name="project_details" class="form-control">
			</div>

			<div class="col-md-12 text-center">
				<button class="btn btn-primary">Save Project</button>
			</div>

		</div>
	</form>
</div>

 <div class="container mt-3  border  p-5">
	<div class="row">
		<div class="col-md-12">
			<h2>Project List</h2>

	<table class="table table-bordered table-hover">
        <tr>
		<th>Action</th>
		<th>SN</th>
		<th>Heading</th>
		<th>Details</th>
		<th>Image</th>
	</tr>
	<?php
	foreach($project as $key => $row)
	{
		?>
		<tr>
			<td>
				<a href="<?=base_url()?>admin/edit_project/<?=$row['project_id']?>">
					<button class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button>
				</a>
				<a href="<?=base_url()?>admin/delete_project/<?=$row['project_id']?>">
					<button class="btn btn-danger btn-sm" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i></button>
				</a>
			</td>
			<td><?=$key+1?></td>
			<td><?=$row['project_heading']?></td>
			<td><?=$row['project_details']?></td>
			<td>
				<img src="<?=base_url()?>uploads/<?=$row['project_image']?>" width="100px">

			</td>


		</tr>
		<?php
	}

	?>

	</table>
</div>
</div>
</div> 
