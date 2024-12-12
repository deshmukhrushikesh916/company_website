<div class="container p-4 " style="color:black;">
	<form action="<?=base_url()?>admin/save_our_team" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center mb-4">Our Team</h2>
			</div>
			<div class="col-md-6 mb-4">
				Select  Image
				<input type="file" name="our_team_image" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Name
				<input type="text" name="our_team_name" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Position
				<input type="text" name="our_team_position" class="form-control">
			</div>
			<div class="col-md-6 mb-4">
			  Facebook Link
				<input type="text" name="facebook_link" class="form-control">
			</div>

           <div class="col-md-6 mb-4">
			  Enter Twitter Link
				<input type="text" name="twitter_link" class="form-control">
			</div>

            <div class="col-md-6 mb-4">
			  Enter Pinterest Link
				<input type="text" name="pinterest_link" class="form-control">
			</div>

                 <div class="col-md-6 mb-4">
			  Enter Instagram Link
				<input type="text" name="instagram_link" class="form-control">
			</div>


			<div class="col-md-12 text-center">
				<button class="btn btn-primary">Save Our Team</button>
			</div>

		</div>
	</form>
</div>

<div class="container mt-3  border p-1">
	<div class="row">
		<div class="col-md-12">
			<h2 class="mb-3 text-center">Our Team List</h2>

	<table class="table table-bordered table-hover" style="width:50%;" >
        <tr>
		<th>Action</th>
		<th>SN</th>
		<th>Name</th>
		<th>Position</th>
		<th>Facebook Link</th>
		<th>Twitter Link</th>
		<th>Pinterest Link</th>
		<th>Instagram Link</th>
		<th>Image</th>
		

	</tr>
	<?php
	foreach($our_team as $key => $row)
	{
		?>
		<tr>
			<td>
				<a href="<?=base_url()?>admin/edit_our_team/<?=$row['our_team_id']?>">
					<button class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button>
				</a>
				<a href="<?=base_url()?>admin/delete_our_team/<?=$row['our_team_id']?>">
					<button class="btn btn-danger btn-sm" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i></button>
				</a>
			</td>
			<td><?=$key+1?></td>
			<td><?=$row['our_team_name']?></td>
			<td><?=$row['our_team_position']?></td>
			<td><?=$row['facebook_link']?></td>
			<td><?=$row['twitter_link']?></td>
			<td><?=$row['pinterest_link']?></td>
			<td><?=$row['instagram_link']?></td>
			<td>
				<img src="<?=base_url()?>uploads/<?=$row['our_team_image']?>" width="100px">

			</td>

			




		</tr>
		<?php
	}

	?>

	</table>
</div>
</div>
</div>
