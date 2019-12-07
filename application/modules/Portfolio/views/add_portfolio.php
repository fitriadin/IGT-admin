<div class="content h-100 overflow-auto">
                    <div class="my-3 my-md-5">
                        <div class="container">
						<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li>&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;  </li>
						<li class="active">Add Portfolio</li>
						</ol>

						<div class="content h-100 overflow-auto">
                    <div class="container-fluid">
                        <div class="page-header">
                            <h1 class="page-title">
                                Add Portfolio
                            </h1>
                            </div>
                            <div class="row row-cards row-deck">
                            <div class="col-lg-12">
                                <div class="card card-aside">
                                    <div class="card-body d-flex flex-column">

				<?php echo form_open_multipart('Portfolio/create_Portfolio');?>
				<div class="box-body">
					<div class="form-group">
						<label for="portfolioname">Portfolio Name :</label>
						<input type="hidden" class="form-control" name="id_portfolio" id="id_portfolio"  ">

						<input type="text" class="form-control" name="portfolioname" id="portfolioname"  placeholder="Portfolio Name" required>
					</div>
					<div class="form-group">
						<label for="portfoliodesc">Portfolio Description :</label>
						<input type="text" class="form-control" name="portfoliodesc" id="portfoliodesc" placeholder="Portfolio Description" >
					</div>
					<div class="form-group">
						<label for="portfolioimage">Portfolio Image :</label>
						<input type="file" name="filefoto" style="width: 100%;" >
					</div>
					
				<div class="box-footer">
					<button type="submit" class="btn btn-primary fa fa-paper-plane"> Publish</button>
				</div>
				<?php form_close(); ?>
			
		</div>
	</div>
</div>