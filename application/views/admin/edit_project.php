<div class="container p-4 " style="color:black;">
	<form action="<?=base_url()?>admin/update_project" method="post" enctype="multipart/form-data">
			<input type="hidden" name="project_id"  value="<?=$info[0]['project_id']?>">
		<div class="row">
			<div class="col-md-12">
				<h3>Edit  Project</h3>
			</div>
			<div class="col-md-4  mb-4">
				Select  Image
				<input type="file" name="project_image" class="form-control">
			</div>
			<div class="col-md-2">
				<img src="<?=base_url()?>uploads/<?=$info[0]['project_image']?>"  width="100%">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Heading
				<input type="text" name="project_heading" class="form-control" value="<?=$info[0]['project_heading']?>">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Details
				<input type="text" name="project_details" class="form-control" value="<?=$info[0]['project_details']?>">
			</div>

			<div class="col-md-12 text-center">
				<button class="btn btn-primary">Update Project</button>
			</div>

		</div>
	</form>