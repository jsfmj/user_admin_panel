<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Welcome_model');
        $this->load->library('form_validation'); 
    }

    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function savedata()
    {
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('age', 'Age', 'required|numeric');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            
            $this->load->view('welcome_message');
        } else {
            
            $data['first_name'] = $this->input->post('first_name');
            $data['last_name'] = $this->input->post('last_name');
            $data['email'] = $this->input->post('email');
            $data['password'] = $this->input->post('password');
            $data['gender'] = $this->input->post('gender');
            $data['age'] = $this->input->post('age');
            $data['state'] = $this->input->post('state');

            $response = $this->Welcome_model->public_saverecords($data);

            if ($response == true) {
                redirect('Welcome/login');
            } else {
                echo "Insert error!";
            }
        }
    }
    public function login()
	{
		$this->load->view('user_login');
	}
    public function data()
{
    $this->load->library('form_validation');

    $this->form_validation->set_rules('first_name', 'First Name', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() === FALSE) {
        $this->load->view('user_login');
    } else {
        $password = $this->input->post('password');
        $first_name = $this->input->post('first_name');

        $login_result = $this->Welcome_model->checkLogin($password, $first_name);

        if (isset($login_result['status']) && $login_result['status'] == 1) {
            $cookie_value=$login_result['first_name']; 
            $this->input->set_cookie('user',$cookie_value,3600);
            $data['users'] = $this->Welcome_model->getUser($password, $first_name);
            $this->load->view('success', $data);
        } elseif (isset($login_result['status']) && $login_result['status'] == 0) {
            $data['error_message'] = "User blocked!";
            $this->load->view('user_login', $data);
        } else {
            $data['error_message'] = "Invalid credentials!";
            $this->load->view('user_login', $data);
        }
    }
}
public function success()
{
    $this->load->view('success');
}
public function logout()
	{
		$this->load->helper('cookie');
		delete_cookie('user');

    // Redirect or load your desired view
    redirect('welcome/login');
	}
}
?>