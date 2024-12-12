<form action="<?=base_url()?>admin/save_about" method="post"  enctype="multipart/form-data">
	<div class="container shadow  bg-white  border fw-blod " style="color:black;">
		<div class="row">
			<div class="col-md-12 mb-3">
				<h2 class="text-center mb-5 mt-4">About Information</h2>
			</div>

			<div class="col-lg-4 mb-3">
				Image 1
				<input type="file" name="image1" class="form-control">
			</div>
			<div class="col-md-2">
				<img src="<?=base_url()?>uploads/<?=$info[0]['image1']?>"  width="100%">
			</div>

			<div class="col-lg-4 mb-3">
				Image 2
				<input type="file" name="image2" class="form-control">
			</div>

            <div class="col-md-2">
				<img src="<?=base_url()?>uploads/<?=$info[0]['image2']?>"  width="100%">
			</div>

			<div class="col-lg-6 mb-3">
				About Title
				<input type="text" name="about_title" class="form-control" value="<?=$info[0]['about_title']?>">
			</div>



			<div class="col-lg-6  mb-3">
				About Details
				<input type="text" name="about_details" class="form-control" value="<?=$info[0]['about_details']?>" >
			</div>



			<div class="col-lg-6 mb-3">
				About Key 1
				<input type="text" name="about_key1" class="form-control" value="<?=$info[0]['about_key1']?>">
			</div>


			<div class="col-lg-6 mb-3">
				About Key 2
				<input type="text" name="about_key2" class="form-control" value="<?=$info[0]['about_key2']?>">
			</div>


			<div class="col-lg-6 mb-3">
				Text 1
				<input type="text" name="text1" class="form-control" value="<?=$info[0]['text1']?>">
			</div>



			<div class="col-lg-6 mb-3">
			Text 2
				<input type="text" name="text2" class="form-control" value="<?=$info[0]['text2']?>">
			</div>



			 <div class="col-lg-12 mb-3 text-center 	">
			 	<button class="btn btn-primary">Save About</button>
			</div>

		</div>
	</div>
</form>
