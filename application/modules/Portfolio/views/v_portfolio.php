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
	                    <div class="container-fluid">
						</div>
                        <div class="row row-cards row-deck">
                            <div class="col-12">
                                <div class="card">
									<div class="card-header">
									<a href="<?php echo base_url().'portfolio/add_portfolio/';?>" class="btn btn-primary btn-lg"><i class="fa fa-plus"></i> Add Portfolio</a>&nbsp;
									</div>
									<div class="table-responsive">
                                        <table class="table table-hover table-outline table-vcenter text-nowrap card-table">
									<thead>
							<tr>
								<th>No.</th>
								<th>Portfolio Name</th>
								<th>Portfolio Description</th>
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
								<img src="<?php echo base_url('assets/images/portfolio/'.$data->portfolio_image) ?>" width="64" />
								<?php else : ?>
								<img src="<?php echo base_url('assets/images/portfolio/default.jpg') ?>" width="64" />
								<?php endif; ?>
							</td>
								<td>														 
									<a href="<?php echo base_url().'portfolio/edit_portfolio/'.$data->id_portfolio.'';?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>&nbsp;
									<a href="<?php echo base_url().'portfolio/delete_portfolio/'.$data->id_portfolio.'';?>" class="btn btn-danger btn-sm"  onClick="return confirmDialog()"><i class="fa fa-trash"></i> Delete</a>
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