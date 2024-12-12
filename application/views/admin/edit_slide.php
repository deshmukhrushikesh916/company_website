<div class="container p-4 " style="color:black;">
	<form action="<?=base_url()?>admin/update_slider" method="post" enctype="multipart/form-data">
			<input type="hidden" name="slider_id"  value="<?=$info[0]['slider_id']?>">
		<div class="row">
			<div class="col-md-12">
				<h3>Edit  Slider</h3>
			</div>
			<div class="col-md-4  mb-4">
				Select  Image
				<input type="file" name="slider_image" class="form-control">
			</div>
			<div class="col-md-2">
				<img src="<?=base_url()?>uploads/<?=$info[0]['slider_image']?>"  width="100%">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Heading
				<input type="text" name="slider_heading" class="form-control" value="<?=$info[0]['slider_heading']?>">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Sub-Heading
				<input type="text" name="slider_subheading" class="form-control" value="<?=$info[0]['slider_subheading']?>">
			</div>

			<div class="col-md-12 text-center">
				<button class="btn btn-primary">Update Slider</button>
			</div>

		</div>
	</form>