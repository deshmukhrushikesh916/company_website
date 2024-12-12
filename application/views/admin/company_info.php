<form action="<?=base_url()?>admin/save_company_info" method="post">
	<div class="container shadow  bg-white  border  fw-blod" style="color:black;">
		<div class="row">
			<div class="col-md-12 mb-3">
				<h2 class="text-center mb-5 mt-4">Company Information</h2>
			</div>

			<div class="col-lg-6 mb-3">
				Enter Company Name
				<input type="text" name="company_name" class="form-control"  value="<?=$info[0]['company_name']?>">
			</div>


			<div class="col-lg-6 mb-3">
				Enter Company Mobile
				<input type="number" name="company_mobile" class="form-control" value="<?=$info[0]['company_mobile']?>">
			</div>



			<div class="col-lg-6  mb-3">
				Enter Company Email
				<input type="email" name="company_email" class="form-control" value="<?=$info[0]['company_email']?>" >
			</div>



			<div class="col-lg-6 mb-3">
				Enter Company Address
				<input type="text" name="company_address" class="form-control" value="<?=$info[0]['company_address']?>">
			</div>
			

			<div class="col-lg-6 mb-3">
				Instagram Link
				<input type="text" name="instagram_link" class="form-control" value="<?=$info[0]['instagram_link']?>">
			</div>

			<div class="col-lg-6 mb-3">
				Facebook Link
				<input type="text" name="facebook_link" class="form-control" value="<?=$info[0]['facebook_link']?>">
			</div>


			<div class="col-lg-6 mb-3">
				Twitter  Link
				<input type="text" name="twitter_link" class="form-control" value="<?=$info[0]['twitter_link']?>">
			</div>


           <div class="col-lg-6 mb-3">
				Linkedin Link
				<input type="text" name="linkedin_link" class="form-control" value="<?=$info[0]['linkedin_link']?>">
			</div>


			 <div class="col-lg-6 mb-3">
				WhatsApp Mobile
				<input type="number" name="whatsapp_mobile" class="form-control" value="<?=$info[0]['whatsapp_mobile']?>">
			</div>


			<div class="col-lg-6 mb-3">
				Map Link
				<input type="text" name="map_link" class="form-control" value="<?=$info[0]['map_link']?>">
			</div>


			 <div class="col-lg-12 mb-3 text-center 	">
			 	<button class="btn btn-primary">Save Company Info</button>
			</div>



		



		</div>
	</div>
</form>