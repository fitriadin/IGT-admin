<div class="content h-100 overflow-auto">
                    <div class="my-3 my-md-5">
                        <div class="container">
						<div class="container-fluid">
                            <div class="row row-cards row-deck">
                            <div class="col-lg-12">
                                <div class="card card-aside">
                                    <div class="card-body d-flex flex-column">				
				<?php echo form_open_multipart('portfolio/update_portfolio');?>
							<?php
							foreach ($portfolio as $data) {
							?>
					<div class="card-header">
                        <h3 class="card-title">Edit Profile</h3>
                        </div>			
					<div class="card-body">
                        <div class="row">
                    	<div class="col-lg-12">			
					<div class="form-group">
						<label for="portfolioname">Service Name :</label>
						<input type="hidden" class="form-control" name="id_portfolio" id="id_portfolio" value="<?php echo $data->id_portfolio ;?> ">
						<input type="text" class="form-control" name="portfolioname" id="portfolioname"  value="<?php echo $data->portfolio_name ;?>" required>
					</div>
					<div class="form-group">
						<label for="portfoliodesc">Service Description :</label>
						<input type="text" class="form-control" name="portfoliodesc" id="portfoliodesc" value="<?php echo $data->portfolio_description ;?>" >
					</div>				
					<div class="form-group">
								<label for="name">Service Image : </label>
								<input type="hidden" class="form-control" name="old_image" id="old_image" value="<?php echo $data->portfolio_image ;?> ">
								<br>
								<img src="<?php echo base_url('assets/images/portfolio/'.$data->portfolio_image) ?>" width="64" />
								<br><br/>
								<input type="file" name="filefoto" style="width: 100%;" >
								</div>
					<div class="card-footer text-left">
					<button type="submit" class="btn btn-primary fa fa-paper-plane"> Update</button>
					</div>
				
				<?php form_close(); ?>
				<?php } ?>
				
		</div>
	</div>
</div>