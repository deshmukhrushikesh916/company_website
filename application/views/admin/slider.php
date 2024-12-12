<div class="container p-4 " style="color:black;">
	<form action="<?=base_url()?>admin/save_slider" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center mb-5 mt-2">Add New  Slider</h2>
			</div>
			<div class="col-md-6 mb-4">
				Select  Image
				<input type="file" name="slider_image" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Heading
				<input type="text" name="slider_heading" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Sub-Heading
				<input type="text" name="slider_subheading" class="form-control">
			</div>

			<div class="col-md-12 text-center">
				<button class="btn btn-primary">Save Slider</button>
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
		<th>Heading</th>
		<th>Sub-Heading</th>
		<th>Image</th>
	</tr>
	<?php
	foreach($slides as $key => $row)
	{
		?>
		<tr>
			<td>
				<a href="<?=base_url()?>admin/edit_slide/<?=$row['slider_id']?>">
					<button class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button>
				</a>
				<a href="<?=base_url()?>admin/delete_slide/<?=$row['slider_id']?>">
					<button class="btn btn-danger btn-sm" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i></button>
				</a>
			</td>
			<td><?=$key+1?></td>
			<td><?=$row['slider_heading']?></td>
			<td><?=$row['slider_subheading']?></td>
			<td>
				<img src="<?=base_url()?>uploads/<?=$row['slider_image']?>" width="100px">

			</td>


		</tr>
		<?php
	}

	?>

	</table>
</div>
</div>
</div>
