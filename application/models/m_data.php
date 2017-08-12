<?php

/**
* 
*/
class m_data extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getDataMarker(){
		$query = $this->db->query("SELECT * FROM v_showall");

		return $query->result_array();
	}

}

?>