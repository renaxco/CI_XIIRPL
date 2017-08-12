<?php


/**
* 
*/
class main extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('nuptk')) {
			$this->session->set_flashdata('gagal',"<div class='alert alert-danger' role='alert'>
      <strong>NAH NAH!</strong> Anda Harus Login Terlebih Dahulu.
    </div>");
		redirect('login');
		}
		$this->load->model('m_data','m');
	}

	function index(){
		$data['showMarker'] = $this->m->getDataMarker();

		$this->load->view('v_main',$data);
	}

	function logOut(){
		$this->session->unset_userdata('nuptk');
	

		$this->session->set_flashdata('gagal',"<div class='alert alert-success' role='alert'>
      <strong>Success!</strong> Anda Sudah LogOut.
    </div>");
		redirect('login');
	}

}
?>