<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends MY_Controller {

	 function __construct()
	{
		parent::__construct();
		//Do your magic here
		 $this->load->model('M_Services');
		//  $this->load->library('upload');
		// 	if ($this->session->userdata('level') == '' or $this->session->userdata('level') == 'manager'  ) {
		// 	# code...
		// 	redirect(base_url('auth'));
		// }
	}

	 function index()
	{
		
		$data = array(
			'title' => 'Itematik Admin','read_Services' => $this->M_Services->read_Services()->result()
		);
		
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('services/v_services', $data);
		$this->load->view('template/footer', $data);
	}

	 function create_Services()
	{

		$this->form_validation->set_rules('servicename', 'servicename', 'trim|required|xss_clean');
		$this->form_validation->set_rules('servicedesc', 'servicedesc', 'trim|required|xss_clean');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		$config['upload_path'] = './assets/images/services'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
		$this->load->library('upload',$config);


		$this->upload->initialize($config);
		if ($filefoto = $_FILES['filefoto']) {
		if ($this->form_validation->run() ==  FALSE ) {
			# code...
			$this->session->set_flashdata('error', 'something wrong, please check your input');
			redirect(base_url('services'));
		} else {
			# code...
			$servicename = $this->input->post('servicename');
			$servicedesc = $this->input->post('servicedesc');
			if(!empty($_FILES['filefoto'])) {
				if ($this->upload->do_upload('filefoto')) {
					$id_service = $this->input->post('id_service');
					$servicename = $this->input->post('servicename');
					$servicedesc = $this->input->post('servicedesc');
					$filefoto=$this->upload->data('file_name');
				
					$data = array(
						'service_name' => $servicename , 
						'service_description' => $servicedesc , 
						'service_image' => $filefoto 
					);
		
					
					$this->M_Services->create_($data,'service');
		
					$this->session->set_flashdata('succes', 'Data Success saved');
					redirect(base_url('services'));
				}
				// $filefoto = $this->input->post('old_image');
			    else {
					$id_service = $this->input->post('id_service');
					$servicename = $this->input->post('servicename');
					$servicedesc = $this->input->post('servicedesc');
					$filefoto="default.jpg";
					

					
				
					$data = array(
						'service_name' => $servicename , 
						'service_description' => $servicedesc , 
						'service_image' => $filefoto 
					);
			$this->M_Services->create_($data,'service');

			$this->session->set_flashdata('succes', 'Data Succes Save');
			redirect(base_url('services'));
					}	
				}
			}
		}
	}
	public function add_Services()
	{
		

		$this->load->view('template/header');
		$this->load->view('template/menu' );
		$this->load->view('services/add_services');
		$this->load->view('template/footer');


	}


	public function edit_Services($id)
	{
		$where = array('id_service' => $id );

		$data['service'] = $this->M_Services->edit_($where,'service')->result()

		;

		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('services/edit_services', $data);
		$this->load->view('template/footer', $data);


	}

	 function update_Services()
	 {

		$this->form_validation->set_rules('servicename', 'servicename', 'trim|required|xss_clean');
		$this->form_validation->set_rules('servicedesc', 'servicedesc', 'trim|required|xss_clean');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');		
		$config['upload_path'] = './assets/images/services'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	   // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
		$this->load->library('upload',$config);


		$this->upload->initialize($config);
		if ($filefoto = $_FILES['filefoto']) {
		if ($this->form_validation->run() ==  FALSE ) {
			# code...
			$this->session->set_flashdata('error', 'something wrong, please check your input');
			redirect(base_url('services'));
		} else {
			# code...
			$id_service = $this->input->post('id_service');
			$servicename = $this->input->post('servicename');
			$servicedesc = $this->input->post('servicedesc');
			// $old_image = $this->input->post('old_image');
			if(!empty($_FILES['filefoto'])) {
				if ($this->upload->do_upload('filefoto')) {
					$id_service = $this->input->post('id_service');
					$servicename = $this->input->post('servicename');
					$servicedesc = $this->input->post('servicedesc');
					$filefoto=$this->upload->data('file_name');
				
					$data = array(
						'service_name' => $servicename , 
						'service_description' => $servicedesc , 
						'service_image' => $filefoto 
					);
		
					$where = array('id_service' => $id_service );
		
					$this->M_Services->update_($where,$data,'service');
		
					$this->session->set_flashdata('update', 'Data Succes update');
					redirect(base_url('Services'));
				}
				// $filefoto = $this->input->post('old_image');
			    else {
					$id_service = $this->input->post('id_service');
					$servicename = $this->input->post('servicename');
					$servicedesc = $this->input->post('servicedesc');
					$filefoto=$this->input->post('old_image');
					

					
				
					$data = array(
						'service_name' => $servicename , 
						'service_description' => $servicedesc , 
						'service_image' => $filefoto 
					);
		
					$where = array('id_service' => $id_service );
		
					$this->M_Services->update_($where,$data,'service');
		
					$this->session->set_flashdata('update', 'Data Succes update');
					redirect(base_url('services'));
					 } }
					 else {
					redirect(base_url('services'));
					}				 
				}
			}
		}

		
		
	 function delete_Services($id)
	{
		
		$where = array(
			'id_service' => $id  
			
		);
		$row = $this->db->where('id_service',$id)->get('service')->row();
		if ($row->service_image != "default.jpg"){
			unlink('./assets/images/services/'.$row->service_image);

		}
        
			$data = $this->M_Services->delete_($where,'service');	
			$this->session->set_flashdata('delete', 'Data Succes Delete');
			redirect(base_url('services'));
	
		
			}

	

}