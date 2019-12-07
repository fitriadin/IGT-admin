<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends MY_Controller {

	 function __construct()
	{
		parent::__construct();
		//Do your magic here
		 $this->load->model('M_Portfolio');
		 if ($this->session->userdata('username') == '') {
			# code...
			redirect(base_url('auth'));
		}
	}

	 function index()
	{
		
		$data = array(
			'title' => 'Itematik Admin','read_Portfolio' => $this->M_Portfolio->read_Portfolio()->result()
		);
		
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('portfolio/v_portfolio', $data);
		$this->load->view('template/footer', $data);
	}

	 function create_Portfolio()
	{

		$this->form_validation->set_rules('portfolioname', 'portfolioname', 'trim|required|xss_clean');
		$this->form_validation->set_rules('portfoliodesc', 'portfoliodesc', 'trim|required|xss_clean');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		$config['upload_path'] = './assets/images/portfolio'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
		$this->load->library('upload',$config);


		$this->upload->initialize($config);
		if ($filefoto = $_FILES['filefoto']) {
		if ($this->form_validation->run() ==  FALSE ) {
			# code...
			$this->session->set_flashdata('error', 'something wrong, please check your input');
			redirect(base_url('portfolio'));
		} else {
			# code...
			$portfolioname = $this->input->post('portfolioname');
			$portfoliodesc = $this->input->post('portfoliodesc');
			if(!empty($_FILES['filefoto'])) {
				if ($this->upload->do_upload('filefoto')) {
					$id_portfolio = $this->input->post('id_portfolio');
					$portfolioname = $this->input->post('portfolioname');
					$portfoliodesc = $this->input->post('portfoliodesc');
					$filefoto=$this->upload->data('file_name');
				
					$data = array(
						'portfolio_name' => $portfolioname , 
						'portfolio_description' => $portfoliodesc , 
						'portfolio_image' => $filefoto 
					);
		
					
					$this->M_Portfolio->create_($data,'portfolio');
		
					$this->session->set_flashdata('succes', 'Data Success saved');
					redirect(base_url('portfolio'));
				}
				// $filefoto = $this->input->post('old_image');
			    else {
					$id_portfolio = $this->input->post('id_portfolio');
					$portfolioname = $this->input->post('portfolioname');
					$portfoliodesc = $this->input->post('portfoliodesc');
					$filefoto="default.jpg";
					

					
				
					$data = array(
						'portfolio_name' => $portfolioname , 
						'portfolio_description' => $portfoliodesc , 
						'portfolio_image' => $filefoto 
					);
			$this->M_Portfolio->create_($data,'portfolio');

			$this->session->set_flashdata('succes', 'Data Succes Save');
			redirect(base_url('portfolio'));
					}	
				}
			}
		}
	}
	public function add_Portfolio()
	{
		

		$this->load->view('template/header');
		$this->load->view('template/menu' );
		$this->load->view('portfolio/add_portfolio');
		$this->load->view('template/footer');


	}


	public function edit_Portfolio($id)
	{
		$where = array('id_portfolio' => $id );

		$data['portfolio'] = $this->M_Portfolio->edit_($where,'portfolio')->result()

		;

		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('portfolio/edit_portfolio', $data);
		$this->load->view('template/footer', $data);


	}

	 function update_Portfolio()
	 {

		$this->form_validation->set_rules('portfolioname', 'portfolioname', 'trim|required|xss_clean');
		$this->form_validation->set_rules('portfoliodesc', 'portfoliodesc', 'trim|required|xss_clean');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');		
		$config['upload_path'] = './assets/images/portfolio'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	   // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
		$this->load->library('upload',$config);


		$this->upload->initialize($config);
		if ($filefoto = $_FILES['filefoto']) {
		if ($this->form_validation->run() ==  FALSE ) {
			# code...
			$this->session->set_flashdata('error', 'something wrong, please check your input');
			redirect(base_url('portfolio'));
		} else {
			# code...
			$id_portfolio = $this->input->post('id_portfolio');
			$portfolioname = $this->input->post('portfolioname');
			$portfoliodesc = $this->input->post('portfoliodesc');
			// $old_image = $this->input->post('old_image');
			if(!empty($_FILES['filefoto'])) {
				if ($this->upload->do_upload('filefoto')) {
					$id_portfolio = $this->input->post('id_portfolio');
					$portfolioname = $this->input->post('portfolioname');
					$portfoliodesc = $this->input->post('portfoliodesc');
					$filefoto=$this->upload->data('file_name');
				
					$data = array(
						'portfolio_name' => $portfolioname , 
						'portfolio_description' => $portfoliodesc , 
						'portfolio_image' => $filefoto 
					);
		
					$where = array('id_portfolio' => $id_portfolio );
		
					$this->M_Portfolio->update_($where,$data,'portfolio');
		
					$this->session->set_flashdata('update', 'Data Succes update');
					redirect(base_url('portfolio'));
				}
				// $filefoto = $this->input->post('old_image');
			    else {
					$id_portfolio = $this->input->post('id_portfolio');
					$portfolioname = $this->input->post('portfolioname');
					$portfoliodesc = $this->input->post('portfoliodesc');
					$filefoto=$this->input->post('old_image');
					

					
				
					$data = array(
						'portfolio_name' => $portfolioname , 
						'portfolio_description' => $portfoliodesc , 
						'portfolio_image' => $filefoto 
					);
		
					$where = array('id_portfolio' => $id_portfolio );
		
					$this->M_Portfolio->update_($where,$data,'portfolio');
		
					$this->session->set_flashdata('update', 'Data Succes update');
					redirect(base_url('portfolio'));
					 } }
					 else {
					redirect(base_url('portfolio'));
					}				 
				}
			}
		}

		
		
	 function delete_Portfolio($id)
	{
		
		$where = array(
			'id_portfolio' => $id  
			
		);
		$row = $this->db->where('id_portfolio',$id)->get('portfolio')->row();
		if ($row->portfolio_image != "default.jpg"){
			unlink('./assets/images/portfolio/'.$row->portfolio_image);

		}
        
			$data = $this->M_Portfolio->delete_($where,'portfolio');	
			$this->session->set_flashdata('delete', 'Data Succes Delete');
			redirect(base_url('portfolio'));
	
		
			}

	

}