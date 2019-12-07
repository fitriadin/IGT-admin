<div class="content h-100 overflow-auto">
                    <div class="my-3 my-md-5">
                        <div class="container">
						<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li>&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;  </li>
						<li class="active">Add Gallery</li>
						</ol>

						<div class="content h-100 overflow-auto">
                    <div class="container-fluid">
                        <div class="page-header">
                            <h1 class="page-title">
                                Add Gallery
                            </h1>
                            </div>
                            <div class="row row-cards row-deck">
                            <div class="col-lg-12">
                                <div class="card card-aside">
                                    <div class="card-body d-flex flex-column">

				<?php echo form_open_multipart('gallery/create_gallery');?>
				<div class="box-body">
					<div class="form-group">
						<label for="gallerytitle">Gallery Title :</label>
						<input type="hidden" class="form-control" name="id_gallery" id="id_gallery"  ">

						<input type="text" class="form-control" name="gallerytitle" id="gallerytitle"  placeholder="Gallery Title" required>
					</div>
					
					<div class="form-group">
						<label for="galleryimage">Gallery Image :</label>
						<input type="file" name="filefoto" style="width: 100%;" required>
					</div>
				
				<div class="box-footer">
					<button type="submit" class="btn btn-primary fa fa-paper-plane"> Publish</button>
				</div>
				<?php form_close(); ?>
			
		</div>
	</div>
</div>