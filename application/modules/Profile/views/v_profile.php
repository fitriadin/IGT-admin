<div class="content h-100 overflow-auto">
                    <div class="my-3 my-md-5">
                        <div class="container">
						<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li>&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;  </li>
						<li class="active">Profile</li>
						</ol>

						<div class="content h-100 overflow-auto">
                    <div class="container-fluid">
                        <div class="page-header">
                            <h1 class="page-title">
                                Company Profile
                            </h1>
							</div>   
                            <div class="row row-cards row-deck">
							
                            <div class="col-lg-12">
                                <div class="card card-aside">
                                    <div class="card-body d-flex flex-column">
							<?php
							foreach ($read_profile as $data) {
							?>
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-lg-12">
										<div class="form-group">
                                        <input type="hidden" class="form-control" name="id_profil" id="id_profil"  value="<?php echo $data->id_profile ;?> "readonly>
										</div>
										
										<div class="form-group">
										<label class="form-label">Company Name :</label>
										<div class="form-control-plaintext" name="name" id="name"><?php echo $data->name ;?></div>
                                      	</div>
										<div class="form-group">
										<label class="form-label">About :</label>
										<textarea class="form-control-plaintext" name="about" rows="6" readonly><?php echo $data->about ;?></textarea>
                                        </div>
										<div class="form-group">
                                        <label class="form-label">Vision :</label>
                                        <input type="text" class="form-control-plaintext" name="vision" id="vision"  value="<?php echo $data->visi ;?>" readonly>
										</div>
										<div class="form-group">
                                        <label class="form-label">Mision :</label>
										<textarea class="form-control-plaintext" name="about" rows="6" readonly><?php echo $data->misi ;?></textarea>
										</div>
										<div class="form-group">
                                        <label class="form-label">Address :</label>
                                        <input type="text" class="form-control-plaintext" name="address" id="address"  value="<?php echo $data->address ;?>"readonly>
										</div>
										<div class="form-group">
                                        <label class="form-label">City :</label>
                                        <input type="text" class="form-control-plaintext" name="city" id="city"  value="<?php echo $data->city ;?>"readonly>
										</div>
										<div class="form-group">
                                        <label class="form-label">Phone :</label>
                                        <input type="text" class="form-control-plaintext" name="phone" id="phone"  value="<?php echo $data->phone ;?>"readonly>
										</div>
										<div class="form-group">
                                        <label class="form-label">Mobile :</label>
                                        <input type="text" class="form-control-plaintext" name="mobile" id="mobile"  value="<?php echo $data->mobile ;?>"readonly>
										</div>
										<div class="form-group">
										<label class="form-label">Logo :</label>
										<img src="<?php echo base_url('assets/images/'.$data->logo) ?>" width="64" />
										</div>
										
										<div class="card-footer text-right">
										<a href="<?php echo base_url().'profile/edit_profile/'.$data->id_profile.'';?>" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a>&nbsp;
										</div>
									</div>
								</div>
							</div>
							</form>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>