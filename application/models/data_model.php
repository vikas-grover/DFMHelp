<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class data_model extends CI_Model 
{
	function getAll()
	{
		$query= $this->db->query('Select * from machine'); 
		if($query->num_rows()>0)
		{	
			foreach ($query->result() as $row)
			{ 
				$data[] = $row;
			} 
			return $data;
		}
	}
} 

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */