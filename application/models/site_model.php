<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class site_model extends CI_Model 
{
	function getAll()
	{
		$query= $this->db->get('machine'); 
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