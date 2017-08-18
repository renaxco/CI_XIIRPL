<?php 


/**
* 
*/
class register extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_register');

	}

function index(){

		if($this->input->post('Register')){
			echo "Berhasil :v";
		}

}



}

 ?>