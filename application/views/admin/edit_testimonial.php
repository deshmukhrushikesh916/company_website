<div class="container p-4 " style="color:black;">
	<form action="<?=base_url()?>admin/update_testimonial" method="post" enctype="multipart/form-data">
		<input type="hidden" name="testimonial_id"  value="<?=$info[0]['testimonial_id']?>">

		<div class="row">
			<div class="col-md-12">
				<h3>Add Testimonial</h3>
			</div>
			<div class="col-md-4  mb-4">
				Select  Image
				<input type="file" name="testimonial_image" class="form-control">
			</div>
				<div class="col-md-2">
				<img src="<?=base_url()?>uploads/<?=$info[0]['testimonial_image']?>"  width="100%">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Heading
				<input type="text" name="testimonial_heading" class="form-control" value="<?=$info[0]['testimonial_heading']?>">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Details
				<input type="text" name="testimonial_details" class="form-control" value="<?=$info[0]['testimonial_details']?>">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Name
				<input type="text" name="testimonial_name" class="form-control" value="<?=$info[0]['testimonial_name']?>">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Position
				<input type="text" name="testimonial_position" class="form-control" value="<?=$info[0]['testimonial_position']?>">
			</div>

			<div class="col-md-12 text-center">
				<button class="btn btn-primary">Update Testimonial</button>
			</div>

		</div>
	</form>
</div>