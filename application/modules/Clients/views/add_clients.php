<div class="content h-100 overflow-auto">
                    <div class="my-3 my-md-5">
                        <div class="container">
						<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li>&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;  </li>
						<li class="active">Add Clients</li>
						</ol>

						<div class="content h-100 overflow-auto">
                    <div class="container-fluid">
                        <div class="page-header">
                            <h1 class="page-title">
                                Add Clients
                            </h1>
                            </div>
                            <div class="row row-cards row-deck">
                            <div class="col-lg-12">
                                <div class="card card-aside">
                                    <div class="card-body d-flex flex-column">

				<?php echo form_open_multipart('clients/create_clients');?>
				<div class="box-body">
					<div class="form-group">
						<label for="clientsname">Clients Name :</label>
						<input type="hidden" class="form-control" name="id_client" id="id_client"  ">

						<input type="text" class="form-control" name="clientname" id="clientname"  placeholder="Clients Name" required>
					</div>
					
					<div class="form-group">
						<label for="clientsdesc">Clients Website :</label>
						<input type="text" class="form-control" name="clientweb" id="clientweb" placeholder="Clients Description" >
					</div>
					<div class="form-group">
						<label for="clientsimage">Clients Image :</label>
						<input type="file" name="filefoto" style="width: 100%;" >
					</div>
				
				<div class="box-footer">
					<button type="submit" class="btn btn-primary fa fa-paper-plane"> Publish</button>
				</div>
				<?php form_close(); ?>
			
		</div>
	</div>
</div>