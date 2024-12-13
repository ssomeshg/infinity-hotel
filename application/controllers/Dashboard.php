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

    public function hotel_enqury_list() {
		$this->data['enqury'] = $this->Common->get_records("tbl_enqury","*",array('status' => 1));
        $this->data['page'] = 'enqury_list';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function contact_list(){
        $this->data['contact'] = $this->Common->get_records("tbl_contact","*",array('status' =>1));
        $this->data['page'] = 'contact_list';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function tour_enqury_list() {
		$this->data['tour_enqury'] = $this->Common->get_records("tbl_tour_enqury","*",array('status' => 1));
        $this->data['page'] = 'tour_enqury_list';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function hotel_room_list() {
		$this->data['hotel_enqury'] = $this->Common->get_records("tbl_hotel_enqury","*",array('status' => 1));
        $this->data['page'] = 'hotel_enqury_list';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

}