<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function __construct() {
	    parent::__construct();

        if ($this->session->userdata('id') == '') {
            redirect(base_url() . 'Nirvakam');
        }

        $this->data['theme'] = 'Nirvakam';
        $this->data['module'] = 'blog';
        $this->data['page'] = '';
        $this->data['base_url'] = base_url();

        $this->load->model('Common_model', 'Common');
        $this->load->model('Blog_model', 'blog');

    }

    public function index() {
		
        $this->data['page'] = 'blog_create';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function blog_list(){
        $this->data['blog'] = $this->Common->get_records("tbl_blog","*",array('status' => 1));
        $this->data['page'] = 'blog_list';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function blog_save() {
		
        $id = $where['id'] = $this->input->post('id');
        $values['title'] = $this->input->post('title');
        $values['description'] = $this->input->post('description');
        $values['meta_tag'] = $this->input->post('meta_tag');
        $values['meta_title'] = $this->input->post('meta_title');
        $values['meta_description'] = $this->input->post('meta_description');

        if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
            $config['upload_path'] = 'uploads/blog';
            $config['allowed_types'] = 'jpg|png|jpeg|webp';
            $config['file_name'] = rand() . time();

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('error', "Please upload an image with dimensions 1568 * 789.");
                redirect('blog_create');
                return;
            } else {
                $data = array('upload_data' => $this->upload->data());
                $values['image'] = $data['upload_data']['file_name'];
            }
        }
		if(!empty($id)){
			$insert_id = $this->Common->update('tbl_blog',$values,$where);
			$this->session->set_flashdata('success', 'Blog updated successfully.');
		}else{
			$insert_id = $this->Common->insert('tbl_blog',$values);
			$this->session->set_flashdata('success', 'Blog added successfully.');
		}
		
        redirect("blog_list");
    }

    public function blog_edit($id = NULL) {
		 
        $this->data['blog'] = null;

		if ($id) {
            $this->data['blog'] = $this->blog->getblog($id);
        }
		
        $this->data['page'] = 'blog_create';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function blog_delete($id){

        $where['id'] = $id;
		$values['status'] = 0;
		$this->Common->update('tbl_blog', $values, $where);
		$this->session->set_flashdata('success', 'Blog deleted successfully');
		redirect("blog_list");
	}

    public function gallery() {
        $this->data['gallery_category'] = $this->Common->get_records("tbl_gallery_category","*",array('status' => 1));
        $this->data['page'] = 'gallery_create';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function gallery_list(){
        $this->data['gallery'] = $this->Common->get_records("tbl_gallery","*",array('status' => 1));
        $this->data['page'] = 'gallery_list';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function gallery_save() {
		
        $id = $where['id'] = $this->input->post('id');
        $values['gallery_category_id'] = $this->input->post('gallery_category_id');
        $values['title'] = $this->input->post('title');
        $values['description'] = $this->input->post('description');

        if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
            $config['upload_path'] = 'uploads/gallery';
            $config['allowed_types'] = 'jpg|png|jpeg|webp';
            $config['file_name'] = rand() . time();

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('error', "Please upload an image with dimensions 1568 * 789.");
                redirect('gallery_create');
                return;
            } else {
                $data = array('upload_data' => $this->upload->data());
                $values['image'] = $data['upload_data']['file_name'];
            }
        }
		if(!empty($id)){
			$insert_id = $this->Common->update('tbl_gallery',$values,$where);
			$this->session->set_flashdata('success', 'Gallery updated successfully.');
		}else{
			$insert_id = $this->Common->insert('tbl_gallery',$values);
			$this->session->set_flashdata('success', 'Gallery added successfully.');
		}
		
        redirect("gallery_list");
    }

    public function gallery_edit($id = NULL) {
		 
        $this->data['gallery'] = null;

		if ($id) {
            $this->data['gallery'] = $this->blog->getgallery($id);
        }
		$this->data['gallery_category'] = $this->Common->get_records("tbl_gallery_category","*",array('status' => 1));
        $this->data['page'] = 'gallery_create';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function gallery_delete($id){

        $where['id'] = $id;
		$values['status'] = 0;
		$this->Common->update('tbl_gallery', $values, $where);
		$this->session->set_flashdata('success', 'gallery deleted successfully');
		redirect("gallery_list");
	}

}