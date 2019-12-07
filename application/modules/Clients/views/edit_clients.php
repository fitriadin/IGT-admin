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
                                Edit Client
                            </h1>
                            </div>
                            <div class="row row-cards row-deck">
                            <div class="col-lg-12">
                                <div class="card card-aside">
                                    <div class="card-body d-flex flex-column">
				
				<?php echo form_open_multipart('Clients/update_Clients');?>
				<?php
							foreach ($client as $data) {
							?>
				<div class="box-body">
					<div class="form-group">
						<label for="clientname">Client Name :</label>
						<input type="hidden" class="form-control" name="id_client" id="id_client" value="<?php echo $data->id_client ;?> ">
						<input type="text" class="form-control" name="clientname" id="clientname"  value="<?php echo $data->client_name ;?>" required>
					</div>
					<div class="form-group">
						<label for="clientdesc">Client Website :</label>
						<input type="text" class="form-control" name="clientweb" id="clientweb" value="<?php echo $data->client_website ;?>" >
					</div>				
					<div class="form-group">
								<label for="name">Client Image : </label>
								<input type="hidden" class="form-control" name="old_image" id="old_image" value="<?php echo $data->client_image ;?> ">
								<br>
								<img src="<?php echo base_url('assets/images/clients/'.$data->client_image) ?>" width="64" />
								<br><br/>
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