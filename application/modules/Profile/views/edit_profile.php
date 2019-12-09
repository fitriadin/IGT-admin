<div class="content h-100 overflow-auto">
                    <div class="my-3 my-md-5">
                        <div class="container">
						<div class="container-fluid">
                            <div class="row row-cards row-deck">
                            <div class="col-lg-12">
                                <div class="card card-aside">
                                    <div class="card-body d-flex flex-column">
							<?php echo form_open_multipart('profile/update_profile'); ?>
							<?php
							foreach ($profile as $data) {
							?>
                                <div class="card-header">
                                    <h3 class="card-title">Edit Profile</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-lg-12">
										<div class="form-group">
                                        <input type="hidden" class="form-control" name="id_profile" id="id_profile"  value="<?php echo $data->id_profile ;?>">
										</div>
										<div class="form-group">
                                        <label class="form-label">Company Name :</label>
                                        <input type="text" class="form-control" name="name" id="name"  value="<?php echo $data->name ;?>" >
										</div>
										<div class="form-group">
                                        <label class="form-label">About :</label>
                                        <textarea class="form-control" name="about" id="about" rows="6" ><?php echo $data->about ;?></textarea>
                                        </div>
										<div class="form-group">
                                        <label class="form-label">Vision :</label>
                                        <input type="text" class="form-control" name="vision" id="vision"  value="<?php echo $data->visi ;?>" >
										</div>
										<div class="form-group">
                                        <label class="form-label">Mision :</label>
                                        <textarea class="form-control" name="mision" id="mision" rows="6" ><?php echo $data->misi ;?></textarea>
										</div>
										<div class="form-group">
                                        <label class="form-label">Address :</label>
                                        <input type="text" class="form-control" name="address" id="address"  value="<?php echo $data->address ;?>">
										</div>
										<div class="form-group">
                                        <label class="form-label">City :</label>
                                        <input type="text" class="form-control" name="city" id="city"  value="<?php echo $data->city ;?>">
										</div>
										<div class="form-group">
                                        <label class="form-label">Phone :</label>
                                        <input type="text" class="form-control" name="phone" id="phone"  value="<?php echo $data->phone ;?>">
										</div>
										<div class="form-group">
                                        <label class="form-label">Mobile :</label>
                                        <input type="text" class="form-control" name="mobile" id="mobile"  value="<?php echo $data->mobile ;?>">
										</div>
										</div>
										<div class="form-group">
										<label for="name">Logo : </label>
										<br>
										<input type="hidden" class="form-control" name="old_image" id="old_image" value="<?php echo $data->logo ;?> ">
										<img src="<?php echo base_url('assets/images/'.$data->logo) ?>" width="64" />
										<br></br>
										<input type="file" name="logo" style="width: 100%;" >
					
										</div>
						
                                    </div>
										<div class="card-footer text-right">
										<a href="<?php echo base_url()?>profile" type="cancel" class="btn btn-warning">Cancel</a>
										<button type="submit" class="btn btn-primary fa fa-pencil"> Update</button>
			
									</div>
									<?php form_close(); ?>
							<?php } ?>
									</div>
								</div>
							</div>
						
						</div>
					</div>
				</div>
			</div>
		</div>