<div class="content h-100 overflow-auto">
                    <div class="my-3 my-md-5">
                        <div class="container">
						<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li>&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;  </li>
						<li class="active">Edit Profile</li>
						</ol>

						<div class="content h-100 overflow-auto">
                    <div class="container-fluid">
                        <div class="page-header">
                            <h1 class="page-title">
                                Edit Profile
                            </h1>
                            </div>
                            <div class="row row-cards row-deck">
                            <div class="col-lg-12">
                                <div class="card card-aside">
                                    <div class="card-body d-flex flex-column">

			<?php
			foreach ($user as $data) {

				?>
				<?php echo form_open('users/update_users');?>
				<div class="box-body">
					<div class="form-group">
						<label for="alternatif">Email :</label>
						<input type="hidden" class="form-control" name="id_user" id="id_user"  value="<?php echo $data->id_user ;?>">

						<input type="email" class="form-control" name="email" id="email"  value="<?php echo $data->email ;?>">
					</div>
					<div class="form-group">
						<label for="bobot">Username :</label>
						<input type="text" class="form-control" name="username" id="username" value="<?php echo $data->username ;?>" >
					</div>
					<div class="form-group">
						<label for="bobot">Password</label>
						<input type="password" class="form-control" name="password" id="password" value="<?php echo $data->password ;?>" >
					</div>
					<div class="form-group">
						<label for="bobot">Level</label>
						<input type="text" class="form-control" name="level" id="level" value="<?php echo $data->level ;?>" >
					</div>
									
					</div>

				<div class="box-footer">
					<a href="<?php echo base_url()?>users" type="cancel" class="btn btn-warning">Cancel</a>
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
				<?php form_close(); ?>
				<?php
			}
			?>
		</div>
	</div>
</div>