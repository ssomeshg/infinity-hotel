<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Package extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
		if ($this->session->userdata('id') == '') {
            redirect(base_url() . 'Nirvakam');
        }

        $this->data['theme'] = 'Nirvakam';
        $this->data['module'] = 'package';
        $this->data['page'] = '';
        $this->data['base_url'] = base_url();

        $this->load->model('Common_model', 'Common');
        $this->load->model('package_model');
        $this->load->helper('url');
        $this->load->library('upload');
    }

    public function index()
    {
        $this->data['package'] = $this->package_model->create_list();
        $this->data['type'] = $this->package_model->type_list();
        $this->data['page'] = 'package_create';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function package_create()
    {
        $this->data['category'] = $this->package_model->create_list();
        $this->data['page'] = 'package_name';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function save_create_package()
    {
        $id = $this->input->post('category_id');
        $Category_name = $this->input->post('Category_name');
        $status = 1;

        $source = '';
        if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
            $config['upload_path']     = 'uploads/package';
            $config['allowed_types']   = 'jpg|png|jpeg|webp';
            $config['file_name']       = rand() . time();

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('image')) {
                // Handle upload error
            } else {
                $data = array('upload_data' => $this->upload->data());
                $source = $data['upload_data']['file_name'];
            }
        }

        if (!empty($id)) {
            $this->package_model->update_category($id, $Category_name, $source);
        } else {
            $this->package_model->create_package($Category_name, $source, $status);
        }
        redirect('package_category');
    }

    public function get_category_details()
    {
        $id = $this->input->post('id');
        $category = $this->package_model->get_category_by_id($id);

        if ($category) {
            // Return JSON response with category details
            echo json_encode($category);
        } else {
            echo json_encode(array('error' => 'Category not found'));
        }
    }

    public function package_type()
    {
        $this->data['type'] = $this->package_model->type_list();
        $this->data['page'] = 'package_type';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function save_type_package()
    {
        $id = $this->input->post('type_id');
        $category_name = $this->input->post('category_name');
        $Category_type = $this->input->post('category_type');
        $status = 1;

        $source = '';
        if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
            $config['upload_path']     = 'uploads/package';
            $config['allowed_types']   = 'jpg|png|jpeg|webp';
            $config['file_name']       = rand() . time();

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('image')) {
                // Handle upload error
            } else {
                $data = array('upload_data' => $this->upload->data());
                $source = $data['upload_data']['file_name'];
            }
        }

        if (!empty($id)) {
            $this->package_model->update_type($id,$category_name, $Category_type, $source);
        } else {
            $this->package_model->type_package($category_name,$Category_type, $source, $status);
        }
        redirect('package_type');
    }

    public function get_type_details()
    {
        $id = $this->input->post('id');
        $type = $this->package_model->get_type_by_id($id);

        if ($type) {
            // Return JSON response with type details
            echo json_encode($type);
        } else {
            echo json_encode(array('error' => 'Type not found'));
        }
    }


    public function category_delete($id)
    {
        $result = $this->package_model->delete_category($id);
        redirect('package_category');
    }

    public function type_delete($id)
    {
        $result = $this->package_model->delete_type($id);
        redirect('package_type');
    }

    public function package_save()
    {
        $package_title = $this->input->post('category_id');
        $package_type = $this->input->post('type_id');
        $package_content = $this->input->post('package_content');
        $standard_cost = $this->input->post('standard_cost');
        $standard_price = $this->input->post('standard_price');
        $standard_description = $this->input->post('standard_description');
        $luxury_cost = $this->input->post('luxury_cost');
        $luxury_price = $this->input->post('luxury_price');
        $luxury_description = $this->input->post('luxury_description');
        $royal_cost = $this->input->post('royal_cost');
        $royal_price = $this->input->post('royal_price');
        $royal_description = $this->input->post('royal_description');
        $adult = $this->input->post('adult');
        $child = $this->input->post('child');
        $day_plans = $this->input->post('day_plans');
        $package_heading = $this->input->post('package_heading');
        $place = $this->input->post('place');
        $package_inclusion = $this->input->post('package_inclusion');
        $package_exclusions = $this->input->post('package_exclusions');
        $status = 1;

        $source = '';
        if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
            $config['upload_path']     = 'uploads/package';
            $config['allowed_types']   = 'jpg|png|jpeg|webp';
            $config['file_name']       = rand() . time();

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('image')) {
                // Handle upload error
            } else {
                $data = array('upload_data' => $this->upload->data());
                $source = $data['upload_data']['file_name'];
            }
        }

        $image_bundle = array();
        if (isset($_FILES['image_bundle']['name']) && !empty($_FILES['image_bundle']['name'])) {
            $filesCount = count($_FILES['image_bundle']['name']);
            for ($i = 0; $i < $filesCount; $i++) {
                $_FILES['file']['name'] = $_FILES['image_bundle']['name'][$i];
                $_FILES['file']['type'] = $_FILES['image_bundle']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['image_bundle']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['image_bundle']['error'][$i];
                $_FILES['file']['size'] = $_FILES['image_bundle']['size'][$i];

                $config['upload_path']     = 'uploads/package';
                $config['allowed_types']   = 'jpg|png|jpeg|webp';
                $config['file_name']       = rand() . time();

                $this->upload->initialize($config);

                if ($this->upload->do_upload('file')) {
                    $data = $this->upload->data();
                    $image_bundle[] = $data['file_name'];
                }
            }
        }

        $image_bundle = implode(',', $image_bundle);

        $this->package_model->save_package($package_title, $package_type, $package_content, $standard_cost, $standard_price,$standard_description ,$luxury_cost,$luxury_price,$luxury_description,$royal_cost,$royal_price,$royal_description, $adult, $child, $day_plans, $package_heading, $place, $package_inclusion, $package_exclusions, $source, $image_bundle, $status);
        redirect('package_list');
    }

    public function package_active($id)
    {
        $this->data['package'] = $this->package_model->get_package_by_id($id);
        $this->data['page'] = 'package_details';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function package_list()
    {
        $this->data['package'] = $this->package_model->get_list();
        $this->data['page'] = 'package_list';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function package_active_save()
    {
        $package_id = $this->input->post('package_id');
        $plan_titles = $this->input->post('plan_title');
        $plan_descriptions = $this->input->post('plan_description');
        $status = 1;

        if (!empty($plan_titles) && is_array($plan_titles)) {
            foreach ($plan_titles as $index => $title) {
                $description = isset($plan_descriptions[$index]) ? $plan_descriptions[$index] : '';
                $this->package_model->save_active_package($package_id, $title, $description, $status);
            }
        }

        redirect('package_list');
    }

    public function package_edit($id)
    {
        $this->data['package_list'] = $this->package_model->create_list();
        $this->data['type_list'] = $this->package_model->type_list();
        $this->data['package'] = $this->package_model->edit_package($id);
        $this->data['page'] = 'package_edit';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function package_update()
    {
        $id = $this->input->post('id');
        $package_title = $this->input->post('category_id');
        $package_type = $this->input->post('type_id');
        $package_content = $this->input->post('package_content');
        $standard_cost = $this->input->post('standard_cost');
        $standard_price = $this->input->post('standard_price');
        $standard_description = $this->input->post('standard_description');
        $luxury_cost = $this->input->post('luxury_cost');
        $luxury_price = $this->input->post('luxury_price');
        $luxury_description = $this->input->post('luxury_description');
        $royal_cost = $this->input->post('royal_cost');
        $royal_price = $this->input->post('royal_price');
        $royal_description = $this->input->post('royal_description');
        $adult = $this->input->post('adult');
        $child = $this->input->post('child');
        $day_plans = $this->input->post('day_plans');
        $package_heading = $this->input->post('package_heading');
        $place = $this->input->post('place');
        $package_inclusion = $this->input->post('package_inclusion');
        $package_exclusions = $this->input->post('package_exclusions');

        $source = '';
        if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
            $config['upload_path'] = 'uploads/package';
            $config['allowed_types'] = 'jpg|png|jpeg|webp';
            $config['file_name'] = rand() . time();

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('image')) {
                // Handle upload error
            } else {
                $data = array('upload_data' => $this->upload->data());
                $source = $data['upload_data']['file_name'];
            }
        }

        $image_bundle = array();
        if (isset($_FILES['image_bundle']['name']) && !empty($_FILES['image_bundle']['name'])) {
            $filesCount = count($_FILES['image_bundle']['name']);
            for ($i = 0; $i < $filesCount; $i++) {
                $_FILES['file']['name'] = $_FILES['image_bundle']['name'][$i];
                $_FILES['file']['type'] = $_FILES['image_bundle']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['image_bundle']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['image_bundle']['error'][$i];
                $_FILES['file']['size'] = $_FILES['image_bundle']['size'][$i];

                $config['upload_path'] = 'uploads/package';
                $config['allowed_types'] = 'jpg|png|jpeg|webp';
                $config['file_name'] = rand() . time();

                $this->upload->initialize($config);

                if ($this->upload->do_upload('file')) {
                    $data = $this->upload->data();
                    $image_bundle[] = $data['file_name'];
                }
            }
        }

        $image_bundle = implode(',', $image_bundle);

        $this->package_model->update_package($package_title, $package_type, $package_content,  $standard_cost, $standard_price,$standard_description ,$luxury_cost,$luxury_price,$luxury_description,$royal_cost,$royal_price,$royal_description, $adult, $child, $day_plans, $package_heading, $place, $package_inclusion, $package_exclusions, $source, $image_bundle, $id);

        redirect('package_list');
    }

    public function package_delete($id)
    {
        $result = $this->package_model->delete_package($id);
        redirect('package_list');
    }

    public function edit_plan($id){
		
        $this->data['package'] = $this->package_model->plan_edit($id);
		$this->data['package_id'] = $id;
        $this->data['page'] = 'package_edit_details';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'] . '/template');
    }

    public function package_plan_update()
    {
        if ($this->input->post('submitButton')) {
            $package_ids = $this->input->post('id');
            $package_id = $this->input->post('package_id');
            $plan_titles = $this->input->post('plan_title');
            $plan_descriptions = $this->input->post('plan_description');
			
			//echo"<pre>";print_r($_POST);exit();

            foreach ($plan_titles as $index => $title) {
                $id = isset($package_ids[$index]) ? $package_ids[$index] : '';
                $description = isset($plan_descriptions[$index]) ? $plan_descriptions[$index] : '';

                if (empty($id)) {
                    // Insert new plan
                    $status = 1;
                    $this->package_model->save_active_package($package_id, $title, $description, $status);
                } else {
                    // Update existing plan
                    $this->package_model->update_plan($id, $title, $description);
                }
            }
        }

        redirect('package_list');
    }

    public function delete_plan()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        $plan_id = $data['id'];

        if ($this->package_model->delete_plan($plan_id)) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false]);
        }
    }
}
