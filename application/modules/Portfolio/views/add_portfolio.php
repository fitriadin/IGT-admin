<div class="content h-100 overflow-auto">
                    <div class="my-3 my-md-5">
                        <div class="container">
						<div class="container-fluid">
                            <div class="row row-cards row-deck">
                            <div class="col-lg-12">
                                <div class="card card-aside">
                                    <div class="card-body d-flex flex-column">

				<?php echo form_open_multipart('portfolio/create_portfolio');?>
				<div class="card-header">
                        <h3 class="card-title">Add Portfolio</h3>
                        </div>			
					<div class="card-body">
                        <div class="row">
                    	<div class="col-lg-12">			
						<div class="form-group">
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
					
				<div class="card-footer">
					<button type="submit" class="btn btn-primary fa fa-paper-plane"> Publish</button>
				</div>
				<?php form_close(); ?>
			
		</div>
	</div>
</div>