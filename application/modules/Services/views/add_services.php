<div class="content h-100 overflow-auto">
                    <div class="my-3 my-md-5">
                        <div class="container">
						<div class="container-fluid">
                            <div class="row row-cards row-deck">
                            <div class="col-lg-12">
                                <div class="card card-aside">
                                    <div class="card-body d-flex flex-column">

				<?php echo form_open_multipart('services/create_services');?>
				<div class="card-header">
                        <h3 class="card-title">Add Service</h3>
                        </div>			
					<div class="card-body">
                        <div class="row">
                    	<div class="col-lg-12">			
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
					
				<div class="card-footer">
					<button type="submit" class="btn btn-primary fa fa-paper-plane"> Publish</button>
				</div>
				<?php form_close(); ?>
			
		</div>
	</div>
</div>