<?php 

/**
* 
*/
class m_register extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
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