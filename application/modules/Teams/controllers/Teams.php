<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teams extends MY_Controller {

	 function __construct()
	{
		parent::__construct();
		//Do your magic here
		 $this->load->model('M_Teams');
		 if ($this->session->userdata('username') == '') {
			# code...
			redirect(base_url('auth'));
		}
	}

	 function index()
	{
		
		$data = array(
			'title' => 'Itematik Admin','read_Teams' => $this->M_Teams->read_Teams()->result()
		);
		
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('Teams/v_Teams', $data);
		$this->load->view('template/footer', $data);
	}

	 function create_Teams()
	{

		$this->form_validation->set_rules('teamname', 'teamname', 'trim|required|xss_clean');
		$this->form_validation->set_rules('teampos', 'teampos', 'trim|required|xss_clean');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		$config['upload_path'] = './assets/images/teams'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
		$this->load->library('upload',$config);


		$this->upload->initialize($config);
		if ($filefoto = $_FILES['filefoto']) {
		if ($this->form_validation->run() ==  FALSE ) {
			# code...
			$this->session->set_flashdata('error', 'something wrong, please check your input');
			redirect(base_url('Teams'));
		} else {
			# code...
			$Teamsname = $this->input->post('teamname');
			$Teamsdesc = $this->input->post('teampos');
			if(!empty($_FILES['filefoto'])) {
				if ($this->upload->do_upload('filefoto')) {
					$id_Teams = $this->input->post('id_team');
					$Teamsname = $this->input->post('teamname');
					$Teamsdesc = $this->input->post('teampos');
					$filefoto=$this->upload->data('file_name');
				
					$data = array(
						'team_name' => $Teamsname , 
						'team_position' => $Teamsdesc , 
						'team_image' => $filefoto 
					);
		
					
					$this->M_Teams->create_($data,'team');
		
					$this->session->set_flashdata('succes', 'Data Success saved');
					redirect(base_url('Teams'));
				}
				// $filefoto = $this->input->post('old_image');
			    else {
					$id_Teams = $this->input->post('id_team');
					$Teamsname = $this->input->post('teamname');
					$Teamsdesc = $this->input->post('teampos');
					$filefoto="default.jpg";
					

					
				
					$data = array(
						'team_name' => $Teamsname , 
						'team_position' => $Teamsdesc , 
						'team_image' => $filefoto 
					);
			$this->M_Teams->create_($data,'team');

			$this->session->set_flashdata('succes', 'Data Succes Save');
			redirect(base_url('Teams'));
					}	
				}
			}
		}
	}
	public function add_Teams()
	{
		

		$this->load->view('template/header');
		$this->load->view('template/menu' );
		$this->load->view('Teams/add_Teams');
		$this->load->view('template/footer');


	}


	public function edit_Teams($id)
	{
		$where = array('id_team' => $id );

		$data['team'] = $this->M_Teams->edit_($where,'team')->result()

		;

		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('Teams/edit_Teams', $data);
		$this->load->view('template/footer', $data);


	}

	 function update_Teams()
	 {

		$this->form_validation->set_rules('teamname', 'teamname', 'trim|required|xss_clean');
		$this->form_validation->set_rules('teampos', 'teampos', 'trim|required|xss_clean');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');		
		$config['upload_path'] = './assets/images/Teams'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	   // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
		$this->load->library('upload',$config);


		$this->upload->initialize($config);
		if ($filefoto = $_FILES['filefoto']) {
		if ($this->form_validation->run() ==  FALSE ) {
			# code...
			$this->session->set_flashdata('error', 'something wrong, please check your input');
			redirect(base_url('Teams'));
		} else {
			# code...
			$id_Teams = $this->input->post('id_team');
			$Teamsname = $this->input->post('teamname');
			$Teamsdesc = $this->input->post('teampos');
			// $old_image = $this->input->post('old_image');
			if(!empty($_FILES['filefoto'])) {
				if ($this->upload->do_upload('filefoto')) {
					$id_Teams = $this->input->post('id_team');
					$Teamsname = $this->input->post('teamname');
					$Teamsdesc = $this->input->post('teampos');
					$filefoto=$this->upload->data('file_name');
				
					$data = array(
						'team_name' => $Teamsname , 
						'team_position' => $Teamsdesc , 
						'team_image' => $filefoto 
					);
		
					$where = array('id_team' => $id_Teams );
		
					$this->M_Teams->update_($where,$data,'team');
		
					$this->session->set_flashdata('update', 'Data Succes update');
					redirect(base_url('Teams'));
				}
				// $filefoto = $this->input->post('old_image');
			    else {
					$id_Teams = $this->input->post('id_team');
					$Teamsname = $this->input->post('teamname');
					$Teamsdesc = $this->input->post('teampos');
					$filefoto=$this->input->post('old_image');
					

					
				
					$data = array(
						'team_name' => $Teamsname , 
						'team_position' => $Teamsdesc , 
						'team_image' => $filefoto 
					);
		
					$where = array('id_team' => $id_Teams );
		
					$this->M_Teams->update_($where,$data,'team');
		
					$this->session->set_flashdata('update', 'Data Succes update');
					redirect(base_url('Teams'));
					 } }
					 else {
					redirect(base_url('Teams'));
					}				 
				}
			}
		}

		
		
	 function delete_Teams($id)
	{
		
		$where = array(
			'id_team' => $id  
			
		);
		$row = $this->db->where('id_team',$id)->get('team')->row();
		if ($row->team_image != "default.jpg"){
			unlink('./assets/images/teams/'.$row->team_image);

		}
        
			$data = $this->M_Teams->delete_($where,'team');	
			$this->session->set_flashdata('delete', 'Data Succes Delete');
			redirect(base_url('Teams'));
	
		
			}

	

}