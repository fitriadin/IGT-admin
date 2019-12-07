<div class="content h-100 overflow-auto">
                    <div class="my-3 my-md-5">
                        <div class="container">
						<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li>&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;  </li>
						<li class="active">Add Service</li>
						</ol>

						<div class="content h-100 overflow-auto">
                    <div class="container-fluid">
                        <div class="page-header">
                            <h1 class="page-title">
                                Add Service
                            </h1>
                            </div>
                            <div class="row row-cards row-deck">
                            <div class="col-lg-12">
                                <div class="card card-aside">
                                    <div class="card-body d-flex flex-column">

				<?php echo form_open_multipart('services/create_services');?>
				<div class="box-body">
					<div class="form-group">
						<label for="servicename">Service Name :</label>
						<input type="hidden" class="form-control" name="id_service" id="id_service"  ">

						<input type="text" class="form-control" name="servicename" id="servicename"  placeholder="Service Name" required>
					</div>
					<div class="form-group">
						<label for="servicedesc">Service Description :</label>
						<input type="text" class="form-control" name="servicedesc" id="servicedesc" placeholder="Service Description" >
					</div>
					<div class="form-group">
						<label for="serviceimage">Service Image :</label>
						<input type="file" name="filefoto" style="width: 100%;" >
					</div>
					
				<div class="box-footer">
					<button type="submit" class="btn btn-primary fa fa-paper-plane"> Publish</button>
				</div>
				<?php form_close(); ?>
			
		</div>
	</div>
</div>