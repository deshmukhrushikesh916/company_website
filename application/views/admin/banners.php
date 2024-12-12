<form action="<?=base_url()?>admin/save_banners" method="post"  enctype="multipart/form-data">
	<div class="container shadow  bg-white  border fw-blod " style="color:black;">
		<div class="row">
			<div class="col-md-12 mb-3">
				<h3 class="text-center mt-2 mb-3">Banners Images</h3>
			</div>

			<div class="col-lg-4 mb-3">
				Image 1
				<input type="file" name="banner_image1" class="form-control">
			</div>
			 <div class="col-md-2">
				<img src="<?=base_url()?>uploads/<?=$info[0]['banner_image1']?>"  width="100%">
			</div> 

			<div class="col-lg-4 mb-3">
				Image 2
				<input type="file" name="banner_image2" class="form-control">
			</div>
			  <div class="col-md-2">
				<img src="<?=base_url()?>uploads/<?=$info[0]['banner_image2']?>"  width="100%">
			</div> 

			<div class="col-lg-4 mb-3">
				Image 2
				<input type="file" name="banner_image3" class="form-control">
			</div>
			  <div class="col-md-2">
				<img src="<?=base_url()?>uploads/<?=$info[0]['banner_image3']?>"  width="100%">
			</div> 

			 <div class="col-lg-12 mb-3 text-center 	">
			 	<button class="btn btn-primary">Save Banners</button>
			</div>

		</div>
	</div>
</form>
