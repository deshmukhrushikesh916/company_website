<form action="<?=base_url()?>admin/save_it_solution" method="post" enctype="multipart/form-data">
	<div class="container shadow  bg-white  border fw-blod  " style="color:black;">
		<div class="row">
			<div class="col-md-12 mb-3">
				<h2 class="text-center mt-4  mb-2	">IT Solution Information</h2>
			</div>

			<div class="col-lg-4 mb-3">
				Select Image
				<input type="file" name="it_solution_image" class="form-control">
			</div>
			<div class="col-md-2">
				<img src="<?=base_url()?>uploads/<?=$info[0]['it_solution_image']?>"  width="100%">
			</div>



			<div class="col-lg-6 mb-3">
				Enter  Image Caption
				<input type="text" name="it_solution_caption" class="form-control"  value="<?=$info[0]['it_solution_caption']?>">
			</div>



			<div class="col-lg-6  mb-3">
				Enter Youtube Link
				<input type="text" name="it_solution_youtube_link" class="form-control" value="<?=$info[0]['it_solution_youtube_link']?>">
			</div>


			 <div class="col-lg-12 mb-3 text-center 	">
			 	<button class="btn btn-primary">Update IT Solution</button>
			</div>



		



		</div>
	</div>
</form>