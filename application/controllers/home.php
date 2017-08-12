<?php

/**
* 
*/
class home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('nis')) {
			$this->session->set_flashdata('gagal',"<div class='alert alert-danger' role='alert'>
      <strong>NAH NAH!</strong> Anda Harus Login Terlebih Dahulu.
    </div>");
		redirect('login');
		}
		echo "a";
		$this->load->model('m_insert','ins');
	}

	function index(){

		if ($this->input->post('proses')) {
			$this->ins->input();
		}

		//CEK DATA 1
		$query1 = $this->db->query("SELECT * FROM t_kontak_siswa WHERE nis = '".$this->session->userdata('nis')."' ");
		

		//CEK DATA 2
		$query2 = $this->db->query("SELECT * FROM t_d_keluarga WHERE nis = '".$this->session->userdata('nis')."' ");

		//CEK DATA 3
		$query3 = $this->db->query("SELECT * FROM t_alamat_lengkap WHERE nis = '".$this->session->userdata('nis')."' ");

		//VARIABLE PENAMPILAN DATA
		if ($query1->num_rows() == 0 && $query2->num_rows() == 0 && $query3->num_rows() == 0) {

		//UNTUK DI SHOW UP	
			$data['tampil'] = 'input';
			$query = $this->db->query("SELECT * FROM t_d_siswa WHERE nis = '".$this->session->userdata('nis')."' LIMIT 1");

		$data['login'] = $query->row_array();
		$this->load->view('v_home',$data);

		}else{

			$data['tampil'] = 'edit';
			$query = $this->db->query("SELECT * FROM t_d_siswa WHERE nis = '".$this->session->userdata('nis')."' LIMIT 1");

		$data['login'] = $query->row_array();
		$data['showKontak'] = $query1->row_array();
		$data['showKeluarga'] = $query2->row_array();
		$data['showAlamat'] = $query3->row_array();
		$this->load->view('v_home',$data);
		}



	}

	function logOut(){
		$this->session->unset_userdata('nis');
	

		$this->session->set_flashdata('gagal',"<div class='alert alert-success' role='alert'>
      <strong>Success!</strong> Anda Sudah LogOut.
    </div>");
		redirect('login');
	}
}
?>