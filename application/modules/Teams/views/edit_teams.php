<div class="content h-100 overflow-auto">
                    <div class="my-3 my-md-5">
                        <div class="container">
						<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li>&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;  </li>
						<li class="active">Edit Team</li>
						</ol>

						<div class="content h-100 overflow-auto">
                    <div class="container-fluid">
                        <div class="page-header">
                            <h1 class="page-title">
                                Edit Team
                            </h1>
                            </div>
                            <div class="row row-cards row-deck">
                            <div class="col-lg-12">
                                <div class="card card-aside">
                                    <div class="card-body d-flex flex-column">
				
				<?php echo form_open_multipart('Teams/update_Teams');?>
				<?php
							foreach ($team as $data) {
							?>
				<div class="box-body">
					<div class="form-group">
						<label for="teamname">Team Name :</label>
						<input type="hidden" class="form-control" name="id_team" id="id_team" value="<?php echo $data->id_team ;?> ">
						<input type="text" class="form-control" name="teamname" id="teamname"  value="<?php echo $data->team_name ;?>" required>
					</div>
					<div class="form-group">
						<label for="teamdesc">Team Position :</label>
						<input type="text" class="form-control" name="teampos" id="teampos" value="<?php echo $data->team_position ;?>" >
					</div>				
					<div class="form-group">
								<label for="name">Team Image : </label>
								<input type="hidden" class="form-control" name="old_image" id="old_image" value="<?php echo $data->team_image ;?> ">
								<br>
								<img src="<?php echo base_url('assets/images/teams/'.$data->team_image) ?>" width="64" />
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