<div class="container p-4 " style="color:black;">
	<form action="<?=base_url()?>admin/update_our_team" method="post" enctype="multipart/form-data">
			<input type="hidden" name="our_team_id"  value="<?=$info[0]['our_team_id']?>">
		<div class="row">
			<div class="col-md-12">
				<h3>Edit  Our Team </h3>
			</div>
			<div class="col-md-4  mb-4">
				Select  Image
				<input type="file" name="our_team_image" class="form-control">
			</div>
			<div class="col-md-2">
				<img src="<?=base_url()?>uploads/<?=$info[0]['our_team_image']?>"  width="100%">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Name
				<input type="text" name="our_team_name" class="form-control" value="<?=$info[0]['our_team_name']?>">
			</div>

			<div class="col-md-6 mb-4">
			  Enter Position
				<input type="text" name="our_team_position" class="form-control" value="<?=$info[0]['our_team_position']?>">
			</div>

				<div class="col-md-6 mb-4">
			  Facebook Link
				<input type="text" name="facebook_link" class="form-control" value="<?=$info[0]['facebook_link']?>">
			</div>

           <div class="col-md-6 mb-4">
			  Enter Twitter Link
				<input type="text" name="twitter_link" class="form-control" value="<?=$info[0]['twitter_link']?>">
			</div>

            <div class="col-md-6 mb-4">
			  Enter Pinterest Link
				<input type="text" name="pinterest_link" class="form-control" value="<?=$info[0]['pinterest_link']?>">
			</div>

                 <div class="col-md-6 mb-4">
			  Enter Instagram Link
				<input type="text" name="instagram_link" class="form-control" value="<?=$info[0]['instagram_link']?>">
			</div>


			<div class="col-md-12 text-center">
				<button class="btn btn-primary">Update Our Team</button>
			</div>

		</div>
	</form>