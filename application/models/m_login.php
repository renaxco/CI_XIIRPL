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


$query = $this->db->query("SELECT * FROM t_d_siswa WHERE nis = '".$this->input->post('RegNIS')."'");
$query2 = $this->db->query("SELECT * FROM t_user WHERE nis = '".$this->input->post('RegNIS')."'");
if ($query->num_rows() > 0 && $query2->num_rows() == 0) {
	//UPLOAD GAMBAR

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '4000';
		$config['max_width']  = '4000';
		$config['max_height']  = '4000';
		$config['overwrite'] = TRUE;
		$this->load->library('upload', $config); 
			if (!$this->upload->do_upload('RegFoto')){
			    $uploadError = array('upload_error' => $this->upload->display_errors()); 
			   echo "Upload Error";
			     // $this->session->set_flashdata('uploadError', $uploadError, redirect('home'));
			    exit;
		}

		$upload_data = $this->upload->data();
  		 $file_name = $upload_data['file_name'];

  		 //END OF UPLOAD

			$muncul = $query->row_array();
			$data = array(
				'IDUser' =>$this->getautonomor(),
				'nama' => $muncul['namaSiswa'],
				'nis' => $this->input->post('RegNIS'),
				'password' => $muncul['tanggalLahir'],
				'photo'=> $file_name
				);
			$this->db->insert('t_user',$data);

			$this->session->set_flashdata("berhasil","<div class='alert alert-success' role='alert'>
      <strong>Congratulations!</strong> Username berhasil terdaftar.<br/> Silahkan untuk login :D<br/> *untuk password adalah tanggal lahir :D
    </div>");
redirect("login");
			// redirect("home");
		}
		else if($query->num_rows() > 0 && $query2->num_rows() > 0){

$this->session->set_flashdata("gagal","<div class='alert alert-danger' role='alert'>
      <strong>Oh snap!</strong> Username sudah terdaftar, mohon untuk login
    </div>");
			redirect("login");

		}
		else
		{
			$this->session->set_flashdata("gagal","<div class='alert alert-danger' role='alert'>
      <strong>Oh snap!</strong> Username tidak terdaftar, mohon untuk menghubungi wali kelas
    </div>");
			redirect("login");
		}
}

function getautonomor(){

		$this->db->select("IDUser");
		$this->db->order_by("IDUser", "desc");
		$this->db->limit(1);
		$this->db->from('t_user');

		$query = $this->db->get();
		$rslt = $query->result_array();

		$total_rec = $query->num_rows();
		if ($total_rec == 0) {
			$nomor = 1;
		} else {
			$nomor = intval(substr($rslt[0]['IDUser'],strlen('PPDB17'),4)) + 1;

		}

		$hasil="PPDB170".$nomor;

		$_SESSION['autonomor'] = $hasil;

		return $_SESSION['autonomor'];
	}

}
?>