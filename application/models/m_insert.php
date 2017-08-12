<?php

/**
* 
*/
class m_insert extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function input(){
		// INPUT DATA PERTAMA "DATA KONTAK"
		$data1 = array(
			'nis' => $this->session->userdata('nis'),
			'noHP' => $this->input->post('noHP'),
			'whatsApp' => $this->input->post('whatsApp'),
			'BBM' => $this->input->post('BBM'),
			'ID_Line' => $this->input->post('ID_Line'),
			'ID_Facebook' => $this->input->post('ID_Facebook'),
			'Email' => $this->input->post('Email')
			);


		//INPUT KE TABLE t_kontak_siswa
		if($this->db->insert('t_kontak_siswa',$data1)){
			
		//UPLOAD GAMBAR

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '4000';
		$config['max_width']  = '4000';
		$config['max_height']  = '4000';
		$config['overwrite'] = TRUE;
		$this->load->library('upload', $config); 
			if (!$this->upload->do_upload('userfile')){
			    $uploadError = array('upload_error' => $this->upload->display_errors()); 
			    $this->session->set_flashdata('uploadError', $uploadError, redirect('home'));
			    exit;
		}

		$upload_data = $this->upload->data();
  		 $file_name = $upload_data['file_name'];

  		 //END OF UPLOAD

  		 // INPUT DATA KE 2 "DATA ALAMAT"

			$data2 = array(
				'nis' => $this->session->userdata('nis'),
				'Jalan' => $this->input->post('jlan'),
				'RT_RW' => $this->input->post('rtw'),
				'Desa_keluharan' => $this->input->post('desaKel'),
				'kecamatan' => $this->input->post('Kecamatan'),
				'Foto_DepanRumah' => $file_name,
				'Latitude' => $this->input->post('latitude'),
				'Longitude' => $this->input->post('longitude'),
				);

			//INPUT KE TABLE t_alamat_lengkap
			if ($this->db->insert('t_alamat_lengkap',$data2)) {
				
				$data3 = array(
				'nis' => $this->session->userdata('nis'),
				'nama_ayah' => $this->input->post('n_ayah'),
				'noKontakAyah' => $this->input->post('nk_ayah'),
				'pekerjaanAyah' => $this->input->post('p_ayah'),
				'nama_ibu' => $this->input->post('n_ibu'),
				'noKontakIbu' => $this->input->post('nk_ibu'),
				'pekerjaanIbu' => $this->input->post('p_ibu'),
				'jumlahAnak' => $this->input->post('j_anak'),
				'AnakKe' => $this->input->post('k_anak'),
				'saudara' => $this->input->post('saudara'),
					);

				//INPUT KE TABLE t_d_keluarga
				if ($this->db->insert('t_d_keluarga',$data3)) {
				$this->session->set_flashdata('gagal',"<div class='alert alert-success' role='alert'>
      <strong>Success!</strong> Data Berhasil Di Input.
    </div>");

			redirect('home');
				}else{
			$this->session->set_flashdata('gagal',"<div class='alert alert-danger' role='alert'>
      <strong>FAILED!</strong> Data Gagal Di Input.
    </div>");
		redirect('home');
				}


			}else{
			$this->session->set_flashdata('gagal',"<div class='alert alert-danger' role='alert'>
      <strong>FAILED!</strong> Data Gagal Di Input.
    </div>");
		redirect('home');
			}


		}else{
			$this->session->set_flashdata('gagal',"<div class='alert alert-danger' role='alert'>
      <strong>FAILED!</strong> Data Gagal Di Input.
    </div>");
		redirect('home');
		}
		

	}
	
}

?>