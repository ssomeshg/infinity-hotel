<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

    public function __construct() {
	    parent::__construct();

        if ($this->session->userdata('id') == '') {
            redirect(base_url() . 'Nirvakam');
        }

        $this->data['theme'] = 'Nirvakam';
        $this->data['module'] = 'banner';
        $this->data['page'] = '';
        $this->data['base_url'] = base_url();

        $this->load->model('Common_model', 'Common');
        $this->load->model('Blog_model', 'blog');

    }

    public function index() {
		
        $this->data['page'] = 'banner_create';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function banner_list(){
        $this->data['banner'] = $this->Common->get_records("tbl_banner","*",array('status' => 1));
        $this->data['page'] = 'banner_list';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function banner_save() {
		
        $id = $where['id'] = $this->input->post('id');
        $values['title'] = $this->input->post('title');
        $values['heading'] = $this->input->post('heading');
        $values['content'] = $this->input->post('content');
        $values['video_link'] = $this->input->post('video_link');

        if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
            $config['upload_path'] = 'uploads/banner';
            $config['allowed_types'] = 'jpg|png|jpeg|webp';
            $config['file_name'] = rand() . time();

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('error', "Please upload an image with dimensions 1568 * 789.");
                redirect('banner_create');
                return;
            } else {
                $data = array('upload_data' => $this->upload->data());
                $values['image'] = $data['upload_data']['file_name'];
            }
        }
		if(!empty($id)){
			$insert_id = $this->Common->update('tbl_banner',$values,$where);
			$this->session->set_flashdata('success', 'Banner updated successfully.');
		}else{
			$insert_id = $this->Common->insert('tbl_banner',$values);
			$this->session->set_flashdata('success', 'Banner added successfully.');
		}
		
        redirect("banner_list");
    }

    public function banner_edit($id = NULL) {
		 
        $this->data['banner'] = null;

		if ($id) {
            $this->data['banner'] = $this->blog->getbanner($id);
        }
		
        $this->data['page'] = 'banner_create';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function banner_delete($id){

        $where['id'] = $id;
		$values['status'] = 0;
		$this->Common->update('tbl_banner', $values, $where);
		$this->session->set_flashdata('success', 'Banner deleted successfully');
		redirect("banner_list");
	}

    public function gallery_category(){
        $this->data['gallery_category'] = $this->Common->get_records("tbl_gallery_category","*",array('status' => 1));
        $this->data['page'] = 'gallery_category';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function gallery_category_save() {
		
        $id = $where['id'] = $this->input->post('id');
        $values['category_name'] = $this->input->post('category_name');

        if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
            $config['upload_path'] = 'uploads/gallery';
            $config['allowed_types'] = 'jpg|png|jpeg|webp';
            $config['file_name'] = rand() . time();

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('error', "Please upload an image with dimensions 1568 * 789.");
                redirect('video');
                return;
            } else {
                $data = array('upload_data' => $this->upload->data());
                $values['image'] = $data['upload_data']['file_name'];
            }
        }

		if(!empty($id)){
			$insert_id = $this->Common->update('tbl_gallery_category',$values,$where);
			$this->session->set_flashdata('success', 'gallery category updated successfully.');
		}else{
			$insert_id = $this->Common->insert('tbl_gallery_category',$values);
			$this->session->set_flashdata('success', 'gallery category added successfully.');
		}
		
        redirect("gallery_category");
    }

    public function gallery_category_edit()
    {
        $id = $this->input->post('id');
        $video = $this->blog->edit_gallery_category($id);

        if ($video) {
            // Return JSON response with category details
            echo json_encode($video);
        } else {
            echo json_encode(array('error' => 'gallery category not found'));
        }
    }

    public function gallery_category_delete($id){

        $where['id'] = $id;
		$values['status'] = 0;
		$this->Common->update('tbl_gallery_category', $values, $where);
		$this->session->set_flashdata('success', 'gallery category deleted successfully');
		redirect("gallery_category");
	}

    public function testimonial_create() {
		
        $this->data['page'] = 'testimonial_create';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function testimonial_list(){
        $this->data['testimonial'] = $this->Common->get_records("tbl_testimonial","*",array('status' => 1));
        $this->data['page'] = 'testimonial_list';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function testimonial_save() {
		
        $id = $where['id'] = $this->input->post('id');
        $values['title'] = $this->input->post('title');
        $values['heading'] = $this->input->post('heading');
        $values['content'] = $this->input->post('content');
        $values['video_link'] = $this->input->post('video_link');

        if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
            $config['upload_path'] = 'uploads/testimonial';
            $config['allowed_types'] = 'jpg|png|jpeg|webp';
            $config['file_name'] = rand() . time();

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('error', "Please upload an image with dimensions 1568 * 789.");
                redirect('banner_create');
                return;
            } else {
                $data = array('upload_data' => $this->upload->data());
                $values['image'] = $data['upload_data']['file_name'];
            }
        }
		if(!empty($id)){
			$insert_id = $this->Common->update('tbl_testimonial',$values,$where);
			$this->session->set_flashdata('success', 'testimonial updated successfully.');
		}else{
			$insert_id = $this->Common->insert('tbl_testimonial',$values);
			$this->session->set_flashdata('success', 'testimonial added successfully.');
		}
		
        redirect("testimonial_list");
    }

    public function testimonial_edit($id = NULL) {
		 
        $this->data['testimonial'] = null;

		if ($id) {
            $this->data['testimonial'] = $this->blog->gettestimonial($id);
        }
		
        $this->data['page'] = 'testimonial_create';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function testimonial_delete($id){

        $where['id'] = $id;
		$values['status'] = 0;
		$this->Common->update('tbl_testimonial', $values, $where);
		$this->session->set_flashdata('success', 'testimonial deleted successfully');
		redirect("testimonial_list");
	}

}