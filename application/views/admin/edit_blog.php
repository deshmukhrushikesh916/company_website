<div class="container p-4 " style="color:black;">
	<form action="<?=base_url()?>admin/update_blog" method="post" enctype="multipart/form-data">
			<input type="hidden" name="blog_id"  value="<?=$info[0]['blog_id']?>">
		<div class="row">
			<div class="col-md-12">
				<h3>Edit  Blog</h3>
			</div>
			<div class="col-md-4  mb-4">
				Select  Image
				<input type="file" name="blog_image" class="form-control">
			</div>
			<div class="col-md-2">
				<img src="<?=base_url()?>uploads/<?=$info[0]['blog_image']?>"  width="100%">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Title
				<input type="text" name="blog_title" class="form-control" value="<?=$info[0]['blog_title']?>">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Details
				<input type="text" name="blog_details" class="form-control" value="<?=$info[0]['blog_details']?>">
			</div>

			<div class="col-md-12 text-center">
				<button class="btn btn-primary">Update Blog</button>
			</div>

		</div>
	</form>