<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends MY_Controller {

	 function __construct()
	{
		parent::__construct();
		//Do your magic here
		 $this->load->model('M_Gallery');
		 if ($this->session->userdata('username') == '') {
			# code...
			redirect(base_url('auth'));
		}
	}

	 function index()
	{
		
		$data = array(
			'title' => 'Gallery','read_gallery' => $this->M_Gallery->read_gallery()->result()
		);
		
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('gallery/v_gallery', $data);
		$this->load->view('template/footer', $data);
	}

	 function create_Gallery()
	{

		$this->form_validation->set_rules('gallerytitle', 'gallerytitle', 'trim|required|xss_clean');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		$config['upload_path'] = './assets/images/gallery'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
		$this->load->library('upload',$config);


		$this->upload->initialize($config);
		if ($filefoto = $_FILES['filefoto']) {
		if ($this->form_validation->run() ==  FALSE ) {
			# code...
			$this->session->set_flashdata('error', 'something wrong, please check your input');
			redirect(base_url('gallery'));
		} else {
			# code...
			$Galleryname = $this->input->post('gallerytitle');
			if(!empty($_FILES['filefoto'])) {
				if ($this->upload->do_upload('filefoto')) {
					$id_Gallery = $this->input->post('id_gallery');
					$Galleryname = $this->input->post('gallerytitle');
					$filefoto=$this->upload->data('file_name');
				
					$data = array(
						'gallery_title' => $Galleryname , 
						'gallery_image' => $filefoto 
					);
		
					
					$this->M_Gallery->create_($data,'gallery');
		
					$this->session->set_flashdata('succes', 'Data Success saved');
					redirect(base_url('gallery'));
				}
				// $filefoto = $this->input->post('old_image');
			    else {
					$id_Gallery = $this->input->post('id_gallery');
					$Galleryname = $this->input->post('gallerytitle');
					$filefoto="default.jpg";
					

					
				
					$data = array(
						'gallery_title' => $Galleryname , 
						'gallery_image' => $filefoto 
					);
			$this->M_Gallery->create_($data,'gallery');

			$this->session->set_flashdata('succes', 'Data Succes Save');
			redirect(base_url('gallery'));
					}	
				}
			}
		}
	}
	public function add_Gallery()
	{
		
		$data = array(
			'title' => 'Gallery'
		);
		
		$this->load->view('template/header',$data);
		$this->load->view('template/menu',$data );
		$this->load->view('gallery/add_gallery',$data);
		$this->load->view('template/footer',$data);


	}


	public function edit_Gallery($id)
	{
		$where = array('id_gallery' => $id );

		$data = array(
			'title' => 'Gallery','gallery' => $this->M_Gallery->edit_($where,'gallery')->result()
		);
	
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('gallery/edit_gallery', $data);
		$this->load->view('template/footer', $data);


	}

	 function update_Gallery()
	 {

		$this->form_validation->set_rules('gallerytitle', 'galleryname', 'trim|required|xss_clean');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');		
		$config['upload_path'] = './assets/images/gallery'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	   // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
		$this->load->library('upload',$config);


		$this->upload->initialize($config);
		if ($filefoto = $_FILES['filefoto']) {
		if ($this->form_validation->run() ==  FALSE ) {
			# code...
			$this->session->set_flashdata('error', 'something wrong, please check your input');
			redirect(base_url('gallery'));
		} else {
			# code...
			$id_Gallery = $this->input->post('id_gallery');
			$Galleryname = $this->input->post('galleryname');
			$Gallerydesc = $this->input->post('gallerypos');
			// $old_image = $this->input->post('old_image');
			if(!empty($_FILES['filefoto'])) {
				if ($this->upload->do_upload('filefoto')) {
					$id_Gallery = $this->input->post('id_gallery');
					$Galleryname = $this->input->post('gallerytitle');
					$filefoto=$this->upload->data('file_name');
				
					$data = array(
						'gallery_title' => $Galleryname , 
						'gallery_image' => $filefoto 
					);
		
					$where = array('id_gallery' => $id_Gallery );
		
					$this->M_Gallery->update_($where,$data,'gallery');
		
					$this->session->set_flashdata('update', 'Data Succes update');
					redirect(base_url('gallery'));
				}
				// $filefoto = $this->input->post('old_image');
			    else {
					$id_Gallery = $this->input->post('id_gallery');
					$Galleryname = $this->input->post('gallerytitle');
					$filefoto=$this->input->post('old_image');
					

					
				
					$data = array(
						'gallery_title' => $Galleryname , 
						'gallery_image' => $filefoto 
					);
		
					$where = array('id_gallery' => $id_Gallery );
		
					$this->M_Gallery->update_($where,$data,'gallery');
		
					$this->session->set_flashdata('update', 'Data Succes update');
					redirect(base_url('gallery'));
					 } }
					 else {
					redirect(base_url('gallery'));
					}				 
				}
			}
		}

		
		
	 function delete_Gallery($id)
	{
		
		$where = array(
			'id_gallery' => $id  
			
		);
		$row = $this->db->where('id_gallery',$id)->get('gallery')->row();
		if ($row->gallery_image != "default.jpg"){
			unlink('./assets/images/gallery/'.$row->gallery_image);

		}
        
			$data = $this->M_Gallery->delete_($where,'gallery');	
			$this->session->set_flashdata('delete', 'Data Succes Delete');
			redirect(base_url('gallery'));
	
		
			}

	

}