<form action="<?=base_url()?>admin/save_counter" method="post"  enctype="multipart/form-data">
	<div class="container shadow  bg-white  fw-blod border " style="color:black;">
		<div class="row">
			<div class="col-md-12 mb-3">
				<h2 class="text-center mb-4 mt-4">Counter Information</h2>
			</div>

			<div class="col-lg-4 mb-3">
				Background Image
				<input type="file" name="counter_background_image" class="form-control">
			</div>
			<div class="col-md-2">
				<img src="<?=base_url()?>uploads/<?=$info[0]['counter_background_image']?>"  width="100%">
			</div>

			<div class="col-lg-6 mb-3">
				Successful Complete Project
				<input type="text" name="counter1" class="form-control" value="<?=$info[0]['counter1']?>">
			</div>

			<div class="col-lg-6 mb-3">
				 Agency IT Specialists
				<input type="text" name="counter2" class="form-control" value="<?=$info[0]['counter2']?>">
			</div>

			<div class="col-lg-6 mb-3">
				Our Successful Completed Projects
				<input type="text" name="counter3" class="form-control" value="<?=$info[0]['counter3']?>">
			</div>


			 <div class="col-lg-12 mb-3 text-center ">
			 	<button class="btn btn-primary">Save Counter</button>
			</div>

		</div>
	</div>
</form>



