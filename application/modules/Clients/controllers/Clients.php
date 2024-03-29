<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class clients extends MY_Controller {

	 function __construct()
	{
		parent::__construct();
		//Do your magic here
		 $this->load->model('M_Clients');
		 if ($this->session->userdata('username') == '') {
			# code...
			redirect(base_url('auth'));
		}
	}

	 function index()
	{
		
		$data = array(
			'title' => 'Clients','read_Clients' => $this->M_Clients->read_Clients()->result()
		);
		
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('clients/v_clients', $data);
		$this->load->view('template/footer', $data);
	}

	 function create_Clients()
	{

		$this->form_validation->set_rules('clientname', 'clientname', 'trim|required|xss_clean');
		$this->form_validation->set_rules('clientweb', 'clientweb', 'trim|required|xss_clean');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		$config['upload_path'] = './assets/images/clients'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
		$this->load->library('upload',$config);


		$this->upload->initialize($config);
		if ($filefoto = $_FILES['filefoto']) {
		if ($this->form_validation->run() ==  FALSE ) {
			# code...
			$this->session->set_flashdata('error', 'something wrong, please check your input');
			redirect(base_url('clients'));
		} else {
			# code...
			$Clientsname = $this->input->post('clientname');
			$Clientsdesc = $this->input->post('clientweb');
			if(!empty($_FILES['filefoto'])) {
				if ($this->upload->do_upload('filefoto')) {
					$id_client = $this->input->post('id_client');
					$Clientsname = $this->input->post('clientname');
					$Clientsdesc = $this->input->post('clientweb');
					$filefoto=$this->upload->data('file_name');
				
					$data = array(
						'client_name' => $Clientsname , 
						'client_website' => $Clientsdesc , 
						'client_image' => $filefoto 
					);
		
					
					$this->M_Clients->create_($data,'client');
		
					$this->session->set_flashdata('succes', 'Data Success saved');
					redirect(base_url('clients'));
				}
				// $filefoto = $this->input->post('old_image');
			    else {
					$id_client = $this->input->post('id_client');
					$Clientsname = $this->input->post('clientname');
					$Clientsdesc = $this->input->post('clientweb');
					$filefoto="default.jpg";
					

					
				
					$data = array(
						'client_name' => $Clientsname , 
						'client_website' => $Clientsdesc , 
						'client_image' => $filefoto 
					);
			$this->M_Clients->create_($data,'client');

			$this->session->set_flashdata('succes', 'Data Succes Save');
			redirect(base_url('clients'));
					}	
				}
			}
		}
	}
	public function add_Clients()
	{
		
		$data = array(
			'title' => 'Clients'
		);
		
		$this->load->view('template/header',$data);
		$this->load->view('template/menu',$data );
		$this->load->view('clients/add_clients',$data);
		$this->load->view('template/footer',$data);


	}


	public function edit_Clients($id)
	{
		$where = array('id_client' => $id );

		$data = array(
			'title' => 'Clients','client' => $this->M_Clients->edit_($where,'client')->result()
		);
	
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('clients/edit_clients', $data);
		$this->load->view('template/footer', $data);


	}

	 function update_Clients()
	 {

		$this->form_validation->set_rules('clientname', 'clientname', 'trim|required|xss_clean');
		$this->form_validation->set_rules('clientweb', 'clientweb', 'trim|required|xss_clean');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');		
		$config['upload_path'] = './assets/images/clients'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	   // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
		$this->load->library('upload',$config);


		$this->upload->initialize($config);
		if ($filefoto = $_FILES['filefoto']) {
		if ($this->form_validation->run() ==  FALSE ) {
			# code...
			$this->session->set_flashdata('error', 'something wrong, please check your input');
			redirect(base_url('clients'));
		} else {
			# code...
			$id_client = $this->input->post('id_client');
			$Clientsname = $this->input->post('clientname');
			$Clientsdesc = $this->input->post('clientweb');
			// $old_image = $this->input->post('old_image');
			if(!empty($_FILES['filefoto'])) {
				if ($this->upload->do_upload('filefoto')) {
					$id_client = $this->input->post('id_client');
					$Clientsname = $this->input->post('clientname');
					$Clientsdesc = $this->input->post('clientweb');
					$filefoto=$this->upload->data('file_name');
				
					$data = array(
						'client_name' => $Clientsname , 
						'client_website' => $Clientsdesc , 
						'client_image' => $filefoto 
					);
		
					$where = array('id_client' => $id_client );
		
					$this->M_Clients->update_($where,$data,'client');
		
					$this->session->set_flashdata('update', 'Data Succes update');
					redirect(base_url('clients'));
				}
				// $filefoto = $this->input->post('old_image');
			    else {
					$id_client = $this->input->post('id_client');
					$Clientsname = $this->input->post('clientname');
					$Clientsdesc = $this->input->post('clientweb');
					$filefoto=$this->input->post('old_image');
					

					
				
					$data = array(
						'client_name' => $Clientsname , 
						'client_website' => $Clientsdesc , 
						'client_image' => $filefoto 
					);
		
					$where = array('id_client' => $id_client );
		
					$this->M_Clients->update_($where,$data,'client');
		
					$this->session->set_flashdata('update', 'Data Succes update');
					redirect(base_url('clients'));
					 } }
					 else {
					redirect(base_url('clients'));
					}				 
				}
			}
		}

		
		
	 function delete_Clients($id)
	{
		
		$where = array(
			'id_client' => $id  
			
		);
		$row = $this->db->where('id_client',$id)->get('client')->row();
		if ($row->client_image != "default.jpg"){
			unlink('./assets/images/clients/'.$row->client_image);

		}
        
			$data = $this->M_Clients->delete_($where,'client');	
			$this->session->set_flashdata('delete', 'Data Succes Delete');
			redirect(base_url('clients'));
	
		
			}

	

}