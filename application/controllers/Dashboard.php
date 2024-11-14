<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
	    parent::__construct();

        if ($this->session->userdata('id') == '') {
            redirect(base_url() . 'Nirvakam');
        }

        $this->data['theme'] = 'Nirvakam';
        $this->data['module'] = 'dashboard';
        $this->data['page'] = '';
        $this->data['base_url'] = base_url();

        $this->load->model('Common_model', 'Common');

    }

    public function index() {
		
        $this->data['page'] = 'index';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function appointment_list() {
		$this->data['appointment'] = $this->Common->get_records("tbl_appointment","*",array('status' => 0));
        $this->data['page'] = 'appointment_list';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function contact_list(){
        $this->data['contact'] = $this->Common->get_records("tbl_contact","*",array('status' => 0));
        $this->data['page'] = 'contact_list';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

}