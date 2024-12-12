<div class="container p-4 " style="color:black;">
	<form action="<?=base_url()?>admin/update_features" method="post" enctype="multipart/form-data">
			<input type="hidden" name="features_id"  value="<?=$info[0]['features_id']?>">
		<div class="row">
			<div class="col-md-12">
				<h3>Edit  Features</h3>
			</div>
			<div class="col-md-4  mb-4">
				Select  Image
				<input type="file" name="features_image" class="form-control">
			</div>
			<div class="col-md-2">
				<img src="<?=base_url()?>uploads/<?=$info[0]['features_image']?>"  width="100%">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Heading
				<input type="text" name="features_title" class="form-control" value="<?=$info[0]['features_title']?>">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Sub-Heading
				<input type="text" name="features_details" class="form-control" value="<?=$info[0]['features_details']?>">
			</div>

			<div class="col-md-12 text-center">
				<button class="btn btn-primary">Update Features</button>
			</div>

		</div>
	</form>