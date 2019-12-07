<?php
class Home extends MY_controller
{
    function __construct()
    {
        parent:: __construct();
        if ($this->session->userdata('username') == '') {
			# code...
			redirect(base_url('auth'));
		}
    }
    function index()
    {
		$data = array(
			'title' => 'Itematik Admin'
			 );
		
		$this->load->view('template/header',$data);
        $this->load->view('template/menu',$data);
        $this->load->view('home/dashboard',$data);
		$this->load->view('template/footer',$data);
    }
    
}