<?php
class Admin_model extends CI_Model 
{
	public function __construct()
{
    $this->load->database();  
}
	public function saverecords($data)
	{
        $this->db->insert('login',$data);
        return true;
	}
	public function checkLogin($password, $first_name)
    {
        $this->db->select('first_name');
        $this->db->where('password', $password);
        $this->db->where('first_name', $first_name); 
        $query = $this->db->get('login');
        if ($query->num_rows() > 0) {
            $user = $query->row_array();

            return ['first_name' => $first_name];
          }
    }
		public function getAllUsers()
    {
        $query = $this->db->get('public_login');
        return $query->result_array();
    }
    public function blockUser($userId) {
        $this->db->select('status');
        $this->db->where('id', $userId);
        $query = $this->db->get('public_login');
    
        if ($query->num_rows() > 0) {
            $user = $query->row_array();
    
            $newStatus = ($user['status'] == 1) ? 0 : 1;
    
            $this->db->where('id', $userId);
            $this->db->update('public_login', ['status' => $newStatus]);

            $this->db->select('status');
            $this->db->where('id', $userId);
            $query = $this->db->get('public_login');
            if ($query->num_rows() > 0) {
                $user = $query->row_array();
            }  
            return $user;  

    }
}
public function deleteUser($userId) {
    $this->db->where('id', $userId);
    $this->db->delete('public_login');
}
}
?>
