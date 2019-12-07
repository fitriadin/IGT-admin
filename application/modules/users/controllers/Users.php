<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

	 function __construct()
	{
		parent::__construct();
		//Do your magic here
		 $this->load->model('M_Users');

		 if ($this->session->userdata('username') == '') {
			# code...
			redirect(base_url('auth'));
		}
	}

	 function index()
	{
		$data = array(
			'title' => 'Itematik Admin','read_users' => $this->M_Users->read_users()->result()
		);
		
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('users/v_users', $data);
		$this->load->view('template/footer', $data);
	}

	 function create_users()
	{
		$this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');
		$this->form_validation->set_rules('level', 'level', 'trim|required|xss_clean');

		if ($this->form_validation->run() ==  FALSE) {
			# code...
			$this->session->set_flashdata('error', 'something wrong, please check your input');

			redirect(base_url('users'));

		} else {
			# code...
			$email = $this->input->post('email');
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$level = $this->input->post('level');

			$data = array(
				'email' => $email , 
				'username' => $username , 
				'password' => $password,
				'level' => $level
				 
			);

			$this->M_Users->create_($data,'user');

			$this->session->set_flashdata('succes', 'Data Succes Save');
			redirect(base_url('users'));
		}

	}

	public function edit_users($id)
	{
		$where = array('id_user' => $id );

		$data['user'] = $this->M_Users->edit_($where,'user')->result()

		;

		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('users/edit_users', $data);
		$this->load->view('template/footer', $data);


	}

	 function update_users()
	{
		$this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');
		$this->form_validation->set_rules('level', 'level', 'trim|required|xss_clean');

		if ($this->form_validation->run() ==  FALSE) {
			# code...
			$this->session->set_flashdata('error', 'something wrong, please check your input');

			redirect(base_url('users'));

		} else {
			# code...
			$id_user = $this->input->post('id_user');
			$email = $this->input->post('email');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$level = $this->input->post('level');

			$data = array(
				'email' => $email , 
				'username' => $username , 
				'password' => $password,
				'level' => $level
			);

			$where = array('id_user' => $id_user );

			$this->M_Users->update_($where,$data,'user');

			$this->session->set_flashdata('update', 'Data Succes update');
			redirect(base_url('users'));
		}
	}

	 function delete_users($id)
	{
		$where = array(
			'id_user' => $id  
		);

		$data = $this->M_Users->delete_($where,'user');

		$this->session->set_flashdata('delete', 'Data Succes Delete');
		redirect(base_url('users'));
	}

}

