	 <?php 
                if ($this->session->flashdata('succes')) {
                        # code...
                    echo 
                    '
                    <div class="alert alert-success" role="alert">
                    '.$this->session->flashdata("succes").'
                    </div>
                    ';
                } elseif ($this->session->flashdata('delete')) {
                	# code...
                	 echo 
                    '
                    <div class="alert alert-danger" role="alert">
                    '.$this->session->flashdata("delete").'
                    </div>
                    ';
                }elseif ($this->session->flashdata('update')) {
                	# code...
                	 echo 
                    '
                    <div class="alert alert-info" role="alert">
                    '.$this->session->flashdata("update").'
                    </div>
                    ';
                }
                ?>
	<div class="content h-100 overflow-auto">
                    <div class="my-3 my-md-5">
                        <div class="container">
						<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li>&nbsp;<i class="fa fa-angle-double-right"></i>&nbsp;  </li>
						<li class="active">Data users</li>
						</ol>

						<div class="content h-100 overflow-auto">
                    <div class="container-fluid">
                        <div class="page-header">
                            <h1 class="page-title">
                                Data Users
							</h1>
							
							</div>
                            <div class="row row-cards row-deck">
							<div class="col-lg-12">
                                <div class="card card-aside">
                                    <div class="card-body d-flex flex-column">
									<div class="card-header">
							<button type="button" class="btn btn-primary btn-lg fa fa-user-plus" data-toggle="modal" data-target="#exampleModal">  Add User</button>		   
							</div>
							<table>
									<thead>
							<tr>
								<th>No.</th>
								<th>Email</th>
								<th>Username</th>
								<th>Level</th>
								<th>Action</th>
								</tr>
						</thead>
						<tbody>
							<?php foreach ($read_users as $data): 
								
								$no=1;	
								?>
								
							<tr>
								<td><?php echo  $no++ ;?></td>
								<td><?php echo  $data->email ;?></td>
								<td><?php echo  $data->username ;?></td>
								<td><?php echo  $data->level ;?></td>
								<td>														 
									<a href="<?php echo base_url().'users/edit_users/'.$data->id_user.'';?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>&nbsp;
									<a href="<?php echo base_url().'users/delete_users/'.$data->id_user.'';?>" class="btn btn-danger btn-sm"  onClick="return confirmDialog()"><i class="fa fa-pencil"></i> Delete</a>
								</td>
								</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					
								</div>
                                </div>
                            </div>
						</div>
						</div>
				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Add User</h5>
								<button type="button" class="close"data-dismiss="modal" >
								
								</button>
							</div>
							<div class="modal-body">
								<?php echo form_open('users/create_users');?>
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Email :</label>
										<input type="email" class="form-control" id="email" name="email" required="" autocomplete="off">
									</div>
									<div class="form-group">
										<label for="message-text" class="col-form-label">Username :</label>
										<input type="text" class="form-control" id="username" name="username" required="" autocomplete="off">
									</div>
									<div class="form-group">
										<label for="message-text" class="col-form-label">Password :</label>
										<input type="password" class="form-control" id="password" name="password" required="" autocomplete="off">
									</div>
									<div class="form-group">
										<label for="message-text" class="col-form-label">Level :</label>
										<input type="text" class="form-control" id="level" name="level" autocomplete="off">
									</div>									
									<br>
									<div class="form-group">
										<input type="submit" name="" value="Simpan" class="btn btn-lg btn-primary">
									</div>
								 <?php form_close(); ?>
							</div>
							</div>
					</div>
				</div>
				<!-- end modal -->
			</div>
		<!-- 	</div>
		</div> -->
	</div>
	<script>
function confirmDialog() {
 return confirm('Are You sure to delete this?')
}
</script>