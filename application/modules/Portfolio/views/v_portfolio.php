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
				} elseif ($this->session->flashdata('error')) {
                	# code...
                	 echo 
                    '
                    <div class="alert alert-danger" role="alert">
                    '.$this->session->flashdata("error").'
                    </div>
                    ';
                } elseif ($this->session->flashdata('update')) {
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
						<li class="active">Data Portfolio</li>
						</ol>

						<div class="content h-100 overflow-auto">
                    <div class="container-fluid">
                        <div class="page-header">
                            <h1 class="page-title">
                                Data Portfolio
							</h1>
							
							</div>
                            <div class="row row-cards row-deck">
							<div class="col-lg-12">
                                <div class="card card-aside">
                                    <div class="card-body d-flex flex-column">
									<div class="card-header">
									<a href="<?php echo base_url().'Portfolio/add_Portfolio/';?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Service</a>&nbsp;
								</div>
							<table>
									<thead>
							<tr>
								<th>No.</th>
								<th>Service Name</th>
								<th>Service Description</th>
								<th>Image</th>
								<th>Action</th>
								</tr>
						</thead>
						<tbody>
							<?php 
							$no=1;	
							foreach ($read_Portfolio as $data): 
								
								
								?>
								
							<tr>
								<td><?php echo  $no++ ;?></td>
								<td><?php echo  $data->portfolio_name ;?></td>
								<td><?php echo  $data->portfolio_description ;?></td>
								<td>
								<?php if (!empty($data->portfolio_image)): ?>
								<img src="<?php echo base_url('assets/images/Portfolio/'.$data->portfolio_image) ?>" width="64" />
								<?php else : ?>
								<img src="<?php echo base_url('assets/images/Portfolio/default.jpg') ?>" width="64" />
								<?php endif; ?>
							</td>
								<td>														 
									<a href="<?php echo base_url().'Portfolio/edit_Portfolio/'.$data->id_portfolio.'';?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>&nbsp;
									<a href="<?php echo base_url().'Portfolio/delete_Portfolio/'.$data->id_portfolio.'';?>" class="btn btn-danger btn-sm"  onClick="return confirmDialog()"><i class="fa fa-trash"></i> Delete</a>
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
						<!-- 	</div>
		</div> -->

	</div>
	<script>
function confirmDialog() {
 return confirm('Are You sure to delete this?')
}
</script>