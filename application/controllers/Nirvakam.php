<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nirvakam extends CI_Controller{
	
	    public function __construct() {
        parent::__construct();

        $this->data['theme'] = 'Nirvakam';
        $this->data['module'] = 'dashboard';
        $this->data['page'] = '';
        $this->data['base_url'] = base_url();
		
		$this->load->model('Common_model', 'Common');
    }

	public function index(){
		
		$this->load->view('auth/nirvakam');
	}

	public function loginCheck(){

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user_details = $this->db->select('*')->where('email', $email)->where('password', $password)->get('tbl_admin')->row();

		if (!empty($user_details)) {
			if ($user_details->status == 1) {
				$output = array(
					'status'	=> 'Error',
					'msg'		=> 'Profile is Inactive',
				);
			} else {
				
				$this->session->set_userdata('is_logged_in', 'True');
				$this->session->set_userdata('id', $user_details->id);
				$this->session->set_userdata('username', $user_details->username);
				
				$output = array(
					'status'	=> 'Success',
					'msg'		=> 'Login Successfully',
					'link'		=>  base_url() .'dashboard',
				);
			}
		} else {
			$output = array(
				'status'	=> 'Error',
				'msg'		=> 'Invaild Login Details',
			);
		}
		echo json_encode($output);
	}

	public function Logout(){
		
        $this->load->library('session');
        $this->session->sess_destroy();
        redirect('Nirvakam');
	}

	public function changepassword()
	{
		$this->data['page'] = 'changepassword';
		$this->load->vars($this->data);
		$this->load->view($this->data['theme'] . '/template');
	}

	public function save_changepassword()
	{
		$old_password = $this->input->post('oldpassword');
		$new_password = $this->input->post('newpassword');
		$confirm_password = $this->input->post('confirmpassword');

		if (empty($old_password) || empty($new_password) || empty($confirm_password)) {
			$this->session->set_flashdata('error', 'All password fields are required.');
			redirect(base_url() . "Nirvakam/change_password");
			return;
		}

		$admin = $this->db->get('tbl_admin')->row();

		if ($admin->password !== $old_password) {
			$this->session->set_flashdata('error', 'Old password is incorrect.');
			redirect("changepassword");
			return;
		}

		if ($new_password !== $confirm_password) {
			$this->session->set_flashdata('error', 'New password and confirm password do not match.');
			redirect("changepassword");
			return;
		}

		$encrypted_password = password_hash($new_password, PASSWORD_BCRYPT);

		$update_data = [
			'password' => $new_password,
			'encrypt_password' => $encrypted_password
		];

		$this->db->update('tbl_admin', $update_data);

		$this->session->set_flashdata('success', 'Password changed successfully.');
		redirect("changepassword");
	}
	
	public function add_nirvakam(){
		
        $this->data['page'] = 'add_nirvakam';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');

	}
	
	public function save_nirvakam() {
		
        $id = $where['id'] = $this->input->post('id');
        $values['username'] = $this->input->post('username');
        $values['email'] = $this->input->post('email');
        $values['password'] = $this->input->post('password');
		
		if(!empty($id)){
			$insert_id = $this->Common->update('tbl_admin',$values,$where);
			$this->session->set_flashdata('success', 'Nirvakam updated successfully.');
		}else{
			$insert_id = $this->Common->insert('tbl_admin',$values);
			$this->session->set_flashdata('success', 'Nirvakam added successfully.');
		}
		
        redirect(base_url()."Nirvakam/nirvakam_list");
    }
	
	public function nirvakam_list() {
		
        $this->data['nirvakam'] = $this->Common->get_records("tbl_admin","*",array('status' => 0));
        $this->data['page'] = 'nirvakam_list';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }
	
	public function Edit_nirvakam($id = NULL) {
		 
        $this->data['nirvakam'] = null;

		if ($id) {
            $this->data['nirvakam'] = $this->Common->getnirvakam($id);
        }
		
        $this->data['page'] = 'add_nirvakam';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }
	
	public function Delete_nirvakam($id) {
		
        $this->db->where('id', $id);
        $this->db->delete('tbl_admin');
        $this->session->set_flashdata('success', 'Selected item was deleted successfully');
        redirect(base_url()."Nirvakam/nirvakam_list");
    }
	
	
}
