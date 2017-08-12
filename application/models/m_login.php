<?php

/**
* 
*/
class m_login extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function cekLogin(){
		$query = $this->db->query("SELECT * FROM t_d_siswa WHERE nis = '".$this->input->post('nis')."' AND tanggalLahir = '".$this->input->post('tglLahir')."'");

		if ($query->num_rows() > 0) {
			$muncul = $query->row_array();
			$data = array(
				'nis' => $muncul['nis']
				);
			$this->session->set_userdata($data);

			redirect("home");
		}else{
			$this->session->set_flashdata("gagal","<div class='alert alert-danger' role='alert'>
      <strong>Oh snap!</strong> Username atau password salah.
    </div>");
			redirect("login");
		}
	}

	function cekLoginGuru(){
		$query = $this->db->query("SELECT * FROM t_d_guru WHERE nuptk ='".$this->input->post('NUPTK')."' AND tanggalLahir = '".$this->input->post('tglLahirGuru')."'");

		if ($query->num_rows() > 0) {
			$muncul = $query->row_array();
			$data = array(
				'nuptk' => $muncul['nuptk']
				);
			$this->session->set_userdata($data);

			redirect("main");
		}else{
			$this->session->set_flashdata("gagal","<div class='alert alert-danger' role='alert'>
      <strong>Oh snap!</strong> Username atau password salah.
    </div>");
			redirect("login");
		}

	}

function cekNIS(){


$query = $this->db->query("SELECT * FROM t_d_siswa");

}


}
?>