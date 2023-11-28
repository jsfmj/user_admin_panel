<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Admin_Controller {
public function __construct() {
        parent::__construct();
        $this->load->helper('url');
          $this->load->database();
		$this->load->model('Admin_model');
        }

	
	public function index()
	{
		$this->load->view('new');
	}

public function savedata()
	{
		/*load registration view form*/
		$this->load->view('new');




		if($this->input->post('save'))
		{

		    $data['first_name']=$this->input->post('first_name');
			$data['last_name']=$this->input->post('last_name');
			$data['email']=$this->input->post('email');
			$data['password']=$this->input->post('password');
			$response=$this->Admin_model->saverecords($data);
			if($response==true){
			       redirect('Admin/login');
			}
			else{
					echo "Insert error !";
			}
		}
	}
	public function login()
	{
		$this->load->view('admin_login');
	}
	public function data()
	{
		if($this->input->post('save'))
		{
			$password = $this->input->post('password');
			$first_name = $this->input->post('first_name');

			
			$login_result = $this->Admin_model->checkLogin($password, $first_name);

			if ($login_result) {
				$cookie_value=$login_result['first_name'];
				$this->input->set_cookie('admin',$cookie_value,3600);
				$data['users'] = $this->Admin_model->getAllUsers();
        $this->load->view('admin_panel', $data);
			} else {
					echo "Invalid login credentials!";
			}
	  }
	}
	public function admin_panel()
	{
		$this->load->view('admin_panel');
	}
	public function blockUser() {
		$userId = $this->input->post('userId');
		$user_status =	$this->Admin_model->blockUser($userId);
		if ($user_status['status'] == 0) {
				echo json_encode(['status' => '0']);
		} else {
				echo json_encode(['status' => '1']);
		}
}
public function deleteUser() {
	$userId = $this->input->post('userId');

	if ($userId) {
			$this->Admin_model->deleteUser($userId);

			echo json_encode(['status' => 'success']);
	} else {
			echo json_encode(['status' => 'error', 'message' => 'Invalid user ID']);
	}
}
public function logout()
	{
		$this->load->helper('cookie');
		delete_cookie('admin');

    // Redirect or load your desired view
    redirect('Admin/login');
	}

}
