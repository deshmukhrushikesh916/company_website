<div class="container p-4 " style="color:black;">
	<form action="<?=base_url()?>admin/update_services" method="post" enctype="multipart/form-data">
			<input type="hidden" name="services_id"  value="<?=$info[0]['services_id']?>">
		<div class="row">
			<div class="col-md-12">
				<h3>Edit  Services</h3>
			</div>
			<div class="col-md-4  mb-4">
				Select  Image
				<input type="file" name="services_image" class="form-control">
			</div>
			<div class="col-md-2">
				<img src="<?=base_url()?>uploads/<?=$info[0]['services_image']?>"  width="100%">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Title
				<input type="text" name="services_title" class="form-control" value="<?=$info[0]['services_title']?>">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Details
				<input type="text" name="services_details" class="form-control" value="<?=$info[0]['services_details']?>">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Icon 
				<input type="text" name="services_icon" class="form-control" value="<?=$info[0]['services_icon']?>">
			</div>

			<div class="col-md-12 text-center">
				<button class="btn btn-primary">Update Services</button>
			</div>

		</div>
	</form>