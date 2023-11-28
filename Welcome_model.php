<?php

class Welcome_model extends CI_Model 
{
	function public_saverecords($data)
	{
		$this->db->insert('public_login',$data);
		return true;
	}
	public function checkLogin($password, $first_name)
	{
			$this->db->select('status');
			$this->db->select('first_name');
			$this->db->where('password', $password);
			$this->db->where('first_name', $first_name);
			$query = $this->db->get('public_login');
	
			if ($query->num_rows() > 0) {
					$user = $query->row_array();
					$newStatus = $user['status'];
	
					return ['status' => $newStatus,'first_name' => $first_name];
			}
	
			return ['status' => 2]; 
	}
	public function getUser($password, $first_name)
    {
			  $this->db->where('password', $password);
			  $this->db->where('first_name', $first_name);
        $query = $this->db->get('public_login');
        return $query->result_array();
    }
}
?>
