<?php

/**
* 
*/
class login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		
	}

	function index(){

		if ($this->input->post('logSiswa')) {
			$this->m_login->cekLogin();
		}

		if ($this->input->post('logGuru')){
			$this->m_login->cekLoginGuru();
		}

		$this->load->view('v_login');

		if($this->input->post('Register')){
			$this->m_login->cekNIS();
		}


	}

}

?>