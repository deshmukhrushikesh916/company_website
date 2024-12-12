<div class="container p-4 " style="color:black;">
	<form action="<?=base_url()?>admin/save_blog" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-12">
				<h3>Add New  Blog</h3>
			</div>
			<div class="col-md-6 mb-4">
				Blog  Image
				<input type="file" name="blog_image" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
			  Blog Title
				<input type="text" name="blog_title" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Details
				<input type="text" name="blog_details" class="form-control">
			</div>

			<div class="col-md-12 text-center">
				<button class="btn btn-primary">Save Blog</button>
			</div>

		</div>
	</form>
</div>

<div class="container mt-3  border  p-5">
	<div class="row">
		<div class="col-md-12">
			<h2>Blog List</h2>

	<table class="table table-bordered table-hover">
        <tr>
		<th>Action</th>
		<th>SN</th>
		<th>Title</th>
		<th>Details</th>
		<th>Image</th>
	</tr> 
	<?php
	foreach($blog as $key => $row)
	{
		?>
		<tr>
			<td>
				<a href="<?=base_url()?>admin/edit_blog/<?=$row['blog_id']?>">
					<button class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button>
				</a>
				<a href="<?=base_url()?>admin/delete_blog/<?=$row['blog_id']?>">
					<button class="btn btn-danger btn-sm" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i></button>
				</a>
			</td>
			<td><?=$key+1?></td>
			<td><?=$row['blog_title']?></td>
			<td><?=$row['blog_details']?></td>
			<td>
				<img src="<?=base_url()?>uploads/<?=$row['blog_image']?>" width="100px">

			</td>


		</tr>
		<?php
	}

	?>

	</table>
</div>
</div>
</div>
