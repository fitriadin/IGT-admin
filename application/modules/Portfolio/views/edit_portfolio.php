<div class="content h-100 overflow-auto">
                    <div class="my-3 my-md-5">
                        <div class="container">
						<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li>&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;  </li>
						<li class="active">Edit Service</li>
						</ol>

						<div class="content h-100 overflow-auto">
                    <div class="container-fluid">
                        <div class="page-header">
                            <h1 class="page-title">
                                Edit Service
                            </h1>
                            </div>
                            <div class="row row-cards row-deck">
                            <div class="col-lg-12">
                                <div class="card card-aside">
                                    <div class="card-body d-flex flex-column">
				
				<?php echo form_open_multipart('Services/update_Services');?>
				<?php
							foreach ($portfolio as $data) {
							?>
				<div class="box-body">
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
								<img src="<?php echo base_url('assets/images/portfolios/'.$data->portfolio_image) ?>" width="64" />
								<input type="file" name="filefoto" style="width: 100%;" >
					
								</div>
							</div>
					
				<div class="box-footer">
					<button type="submit" class="btn btn-primary fa fa-paper-plane"> Update</button>
				</div>
				
				<?php form_close(); ?>
				<?php } ?>
		</div>
	</div>
</div>