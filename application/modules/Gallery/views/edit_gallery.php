<div class="content h-100 overflow-auto">
                    <div class="my-3 my-md-5">
                        <div class="container">
						<div class="container-fluid">
                            <div class="row row-cards row-deck">
                            <div class="col-lg-12">
                                <div class="card card-aside">
                                    <div class="card-body d-flex flex-column">
				
				<?php echo form_open_multipart('gallery/update_gallery');?>
				<?php
							foreach ($gallery as $data) {
							?>
			<div class="card-header">
                        <h3 class="card-title">Edit Gallery</h3>
                        </div>			
					<div class="card-body">
                        <div class="row">
                    	<div class="col-lg-12">	
						<div class="form-group">
						<label for="galleryname">Gallery Title :</label>
						<input type="hidden" class="form-control" name="id_gallery" id="id_gallery" value="<?php echo $data->id_gallery ;?> ">
						<input type="text" class="form-control" name="gallerytitle" id="gallerytitle"  value="<?php echo $data->gallery_title ;?>" required>
					</div>
					<div class="form-group">
								<label for="name">Gallery Image : </label>
								<input type="hidden" class="form-control" name="old_image" id="old_image" value="<?php echo $data->gallery_image ;?> ">
								<br>
								<img src="<?php echo base_url('assets/images/gallery/'.$data->gallery_image) ?>" width="64" />
								<br><br/>
								<input type="file" name="filefoto" style="width: 100%;" >
					
								</div>
							</div>
					
				<div class="card-footer">
					<button type="submit" class="btn btn-primary fa fa-paper-plane"> Update</button>
				</div>
				
				<?php form_close(); ?>
				<?php } ?>
		</div>
	</div>
</div>