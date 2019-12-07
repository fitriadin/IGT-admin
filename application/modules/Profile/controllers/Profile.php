<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller {

	 function __construct()
	{
		parent::__construct();
		//Do your magic here
		 $this->load->model('M_profile');

		// 	if ($this->session->userdata('level') == '' or $this->session->userdata('level') == 'manager'  ) {
		// 	# code...
		// 	redirect(base_url('auth'));
		// }
	}

	 function index()
	{
		$data = array(
			'title' => 'Itematik Admin','read_profile' => $this->M_profile->read_profile()->result()
		);
		
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('profile/v_profile', $data);
		$this->load->view('template/footer', $data);			
	
	}

	 function create_profile()
	{
		$this->form_validation->set_rules('name', 'name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('about', 'about', 'trim|required|xss_clean');
		$this->form_validation->set_rules('vision', 'vision', 'trim|required|xss_clean');

		if ($this->form_validation->run() ==  FALSE) {
			# code...
			$this->session->set_flashdata('error', 'something wrong, please check your input');

			redirect(base_url('profile'));

		} else {
			# code...
			$name = $this->input->post('name');
			$about = $this->input->post('about');
			$vision = $this->input->post('vision');

			$data = array(
				'name' => $name , 
				'about' => $about , 
				'visi' => $vision 
			);

			$this->M_profile->create_($data,'profile');

			$this->session->set_flashdata('succes', 'Data Succes Save');
			redirect(base_url('profile'));
		}

	}

	public function edit_profile($id)
	{
		$where = array('id_profile' => $id);

		$data['profile'] = $this->M_profile->edit_($where,'profile')->result();

		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('profile/edit_profile', $data);
		$this->load->view('template/footer', $data);


	}

	 function update_profile()
	{
		$this->form_validation->set_rules('name', 'name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('about', 'about', 'trim|required|xss_clean');
		$this->form_validation->set_rules('vision', 'vision', 'trim|required|xss_clean');
		$this->form_validation->set_rules('mision', 'mision', 'trim|required|xss_clean');
		$this->form_validation->set_rules('address', 'address', 'trim|required|xss_clean');
		$this->form_validation->set_rules('city', 'city', 'trim|required|xss_clean');
		$this->form_validation->set_rules('phone', 'phone', 'trim|required|xss_clean');
		$this->form_validation->set_rules('mobile', 'mobile', 'trim|required|xss_clean');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');	
			
		$config['upload_path'] = './assets/images/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['overwrite']			= true;
		$config['max_size']             = 1024;
		// $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
	   $this->load->library('upload',$config);


	   $this->upload->initialize($config);
	   
	   if ($logo = $_FILES['logo']) {
	   if ($this->form_validation->run() ==  FALSE ) {
		   # code...
		   $this->session->set_flashdata('error', 'something wrong, please check your input');
		   redirect(base_url('Profile'));
		} else {
			# code...
					$id_profile = $this->input->post('id_profile');
					$name = $this->input->post('name');
					$about = $this->input->post('about');
					$vision = $this->input->post('vision');
					$mision = $this->input->post('mision');
					$address = $this->input->post('address');
					$city = $this->input->post('city');
					$phone = $this->input->post('phone');
					$mobile = $this->input->post('mobile');
			// $old_image = $this->input->post('old_image');
			if(!empty($_FILES['logo'])) {
				if ($this->upload->do_upload('logo')) {
					$id_profile = $this->input->post('id_profile');
					$name = $this->input->post('name');
					$about = $this->input->post('about');
					$vision = $this->input->post('vision');
					$mision = $this->input->post('mision');
					$address = $this->input->post('address');
					$city = $this->input->post('city');
					$phone = $this->input->post('phone');
					$mobile = $this->input->post('mobile');
					$logo=$this->upload->data('file_name');
					$data = array(
						'name' => $name , 
						'about' => $about , 
						'visi' => $vision,
						'misi' => $mision,
						'address' => $address,
						'city' => $city,
						'phone' => $phone,
						'mobile' => $mobile,
						'logo' => $logo	 
					);
		
					$where = array('id_profile' => $id_profile );
		
					$this->M_profile->update_($where,$data,'profile');
		
					$this->session->set_flashdata('update', 'Data Succes update');
					redirect(base_url('Profile'));
				}
				else {
					$id_profile = $this->input->post('id_profile');
					$name = $this->input->post('name');
					$about = $this->input->post('about');
					$vision = $this->input->post('vision');
					$mision = $this->input->post('mision');
					$address = $this->input->post('address');
					$city = $this->input->post('city');
					$phone = $this->input->post('phone');
					$mobile = $this->input->post('mobile');
					$logo=$this->input->post('old_image');
								
					$data = array(
						'name' => $name , 
						'about' => $about , 
						'visi' => $vision,
						'misi' => $mision,
						'address' => $address,
						'city' => $city,
						'phone' => $phone,
						'mobile' => $mobile,
						'logo' => $logo 
					);
		
					$where = array('id_profile' => $id_profile );
		
					$this->M_profile->update_($where,$data,'profile');
		
					$this->session->set_flashdata('update', 'Data Succes update');
					redirect(base_url('Profile'));
					 } }
					 else {
					redirect(base_url('Profile'));
					}				 
				}
			}
		
}
	 function delete_profile($id)
	{
		$where = array(
			'id_profile' => $id  
		);

		$data = $this->M_profile->delete_($where,'profile');

		$this->session->set_flashdata('delete', 'Data Succes Delete');
		redirect(base_url('profile'));
	}

}

