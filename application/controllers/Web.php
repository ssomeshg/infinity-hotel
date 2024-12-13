<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->data['theme'] = 'web';
		$this->data['module'] = 'pages';
		$this->data['page'] = '';
		$this->data['base_url'] = base_url();

		$this->load->model('Common_model', 'Common');
		$this->load->model('Blog_model', 'blog');
		$this->load->model('web_model','Web');
		$this->load->model('package_model','package');

		//$this->load->helper('text');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->data['blog'] = $this->Common->get_records("tbl_blog","*",array('status' => 1));
		$this->data['testimonial'] = $this->Common->get_records("tbl_testimonial","*",array('status' => 1));
		$this->data['packages'] = $this->Web->package_list();
		$this->data['pack'] = $this->package->get_packages();
		$this->data['type'] = $this->package->create_list();
		$this->data['page'] = 'index';
		$this->load->vars($this->data);
		$this->load->view($this->data['theme'] . '/template');
	}

	public function package_view()
	{
        $this->data['packages'] = $this->Web->package_list();
		$this->data['pack'] = $this->package->get_packages();
		$this->data['type'] = $this->package->create_list();
		$this->data['page'] = 'package-view';
		$this->load->vars($this->data);
		$this->load->view($this->data['theme'] . '/template');
	}

	public function package_page()
	{

		$this->data['page'] = 'package-page';
		$this->load->vars($this->data);
		$this->load->view($this->data['theme'] . '/template');
	}
	
	public function rooms_tariff()
	{
        $this->data['packages'] = $this->Web->package_list();
		$this->data['pack'] = $this->package->get_packages();
		$this->data['type'] = $this->package->create_list();
		$this->data['page'] = 'rooms_tariff';
		$this->load->vars($this->data);
		$this->load->view($this->data['theme'] . '/template');
	}

	public function about_us()
	{
        $this->data['packages'] = $this->Web->package_list();
		$this->data['pack'] = $this->package->get_packages();
		$this->data['type'] = $this->package->create_list();
		$this->data['page'] = 'about';
		$this->load->vars($this->data);
		$this->load->view($this->data['theme'] . '/template');
	}
	
	public function gallery($category_id = null)
	{
		$this->data['gallery_category'] = $this->Common->get_records("tbl_gallery_category","*",array('status' => 1));
		if ($category_id) {
			$this->data['gallery'] = $this->Common->get_records("tbl_gallery", "*", array('status' => 1, 'gallery_category_id' => $category_id));
		} else {
			$this->data['gallery'] = [];
		}
        $this->data['packages'] = $this->Web->package_list();
		$this->data['pack'] = $this->package->get_packages();
		$this->data['type'] = $this->package->create_list();
		$this->data['page'] = 'gallery';
		$this->load->vars($this->data);
		$this->load->view($this->data['theme'] . '/template');
	}

	public function fetch_images()
    {
    $input = json_decode(file_get_contents('php://input'), true);
    $gallery_id = $input['gallery_id'];

    $images = $this->Common->get_records('tbl_gallery', '*', ['gallery_category_id' => $gallery_id, 'status' => 1]);

    if ($images) {
        $category = $this->Common->get_record('tbl_gallery_category', 'category_name', ['id' => $gallery_id]);
        echo json_encode(['success' => true, 'images' => $images, 'category_name' => $category->category_name]);
    } else {
        echo json_encode(['success' => false, 'message' => 'No images found.']);
    }
    }


	public function blog()
	{
		$this->data['blog'] = $this->Common->get_records("tbl_blog","*",array('status' => 1));
		$this->data['packages'] = $this->Web->package_list();
		$this->data['pack'] = $this->package->get_packages();
		$this->data['type'] = $this->package->create_list();
		$this->data['page'] = 'blog';
		$this->load->vars($this->data);
		$this->load->view($this->data['theme'] . '/template');
	}

	public function blog_view($id)
	{
		$this->data['blog'] = $this->blog->getblog($id);

		$this->data['meta'] = [
			'meta_tag' => $this->data['blog']->meta_tag,
			'meta_description' => $this->data['blog']->meta_description,
			'meta_title' => $this->data['blog']->meta_title
		];
        $this->data['packages'] = $this->Web->package_list();
		$this->data['pack'] = $this->package->get_packages();
		$this->data['type'] = $this->package->create_list();
		$this->data['page'] = 'blog_view';
		$this->load->vars($this->data);
		$this->load->view($this->data['theme'] . '/template');
	}
	
	public function contact()
	{
        $this->data['packages'] = $this->Web->package_list();
		$this->data['pack'] = $this->package->get_packages();
		$this->data['type'] = $this->package->create_list();
		$this->data['page'] = 'contact';
		$this->load->vars($this->data);
		$this->load->view($this->data['theme'] . '/template');
	}

	public function package_list($category_name)
	{
		$category = str_replace('-', ' ', $category_name); 
		$category_id = $this->Web->get_category_name_id($category);
		$this->session->set_userdata('pack_id', $category_id->id);

		$this->data['type'] = $this->package->create_list();
		$this->data['category_types'] = $this->package->type_list();
		$this->data['category'] = $this->package->get_type();
		$this->data['packages'] = $this->Web->get_package_by_title($category_id->id);
		$this->data['pack'] = $this->package->get_packages();

		$this->data['active_category_id'] = $category_id->id;

		$this->data['page'] = 'package-page';
		$this->load->vars($this->data);
		$this->load->view($this->data['theme'] . '/template');
	}

	public function package_type($category_name, $category_type)
	{
		$category = str_replace('-', ' ', $category_name); 
		$type = str_replace('-', ' ', $category_type);
		
		$category_id = $this->web_model->get_category_name_id($category);
		$type_id = $this->web_model->get_category_type_id($type);

		$this->data['type'] = $this->package_model->create_list();
		$this->data['category_types'] = $this->package_model->type_list();
		$this->data['category'] = $this->package_model->get_type();
		$this->data['packages'] = $this->web_model->get_package_by_title_and_type($category_id->id, $type_id->id);
		$this->data['pack'] = $this->package_model->get_packages();

		$this->data['page'] = 'package-view';
		$this->load->vars($this->data);
		$this->load->view($this->data['theme'] . '/template');
	}

	public function explore($id)
	{
		$this->data['type'] = $this->package->create_list();
		$this->data['category_types'] = $this->package->type_list();
		$this->data['pack'] = $this->package->get_packages();
		$this->data['package'] = $this->Web->get_package_by_id($id);
		$this->data['plans'] = $this->Web->get_plans_by_package_id($id);

		$this->data['page'] = 'package-view';
		$this->load->vars($this->data);
		$this->load->view($this->data['theme'] . '/template');
	}

	public function enqury_save()
	{
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('room_type', 'room_type', 'required');

		if ($this->form_validation->run() == FALSE) {
			$errors = [
				'room_type' => form_error('name')
			];
			echo json_encode(['status' => 'error', 'errors' => $errors]);
		} else {
			$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
			$userIp = $this->input->ip_address();
			$secret = '6LdSQz4qAAAAAK8lHo9oi4JdtSBGSE58sr7wB6jN';
			$url = 'https://www.google.com/recaptcha/api/siteverify';

			$response = file_get_contents($url . '?secret=' . $secret . '&response=' . $recaptchaResponse . '&remoteip=' . $userIp);
			$status = json_decode($response, true);

			if ($status['success']) {
				$values = [
					'room_type' => $this->input->post('room_type'),
					'no_of_rooms' => $this->input->post('no_of_rooms'),
					'name' => $this->input->post('name'),
					'mobile' => $this->input->post('mobile'),
					'location' => $this->input->post('location'),
					'check_in' => $this->input->post('check_in'),
					'check_out' => $this->input->post('check_out'),
				];

				$insert_id = $this->Common->insert('tbl_enqury', $values);
				if ($insert_id) {
					echo json_encode(['status' => 'success', 'message' => 'Your Enquery has been successfully saved!']);
				} else {
					echo json_encode(['status' => 'error', 'message' => 'Failed to add Enquery.']);
				}
			} else {
				echo json_encode(['status' => 'error', 'message' => 'reCAPTCHA verification failed. Please try again.']);
			}
		}
	}

	public function enqury_delete($id)
	{

		$where['id'] = $id;
		$values['status'] = 0;
		$this->Common->update('tbl_enqury', $values, $where);
		$this->session->set_flashdata('success', 'Enqury deleted successfully');
		redirect('enqury_list');
	}

	public function contact_save()
	{

		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE) {
			$errors = [
				'name' => form_error('name'),
				'email' => form_error('email')
			];
			echo json_encode(['status' => 'error', 'errors' => $errors]);
		} else {
			$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
			$userIp = $this->input->ip_address();
			$secret = '6LdSQz4qAAAAAK8lHo9oi4JdtSBGSE58sr7wB6jN';
			$url = 'https://www.google.com/recaptcha/api/siteverify';

			$response = file_get_contents($url . '?secret=' . $secret . '&response=' . $recaptchaResponse . '&remoteip=' . $userIp);
			$status = json_decode($response, true);

			if ($status['success']) {
				$values = [
					'name' => $this->input->post('name'),
					'email' => $this->input->post('email'),
					'message' => $this->input->post('message')
				];

				$insert_id = $this->Common->insert('tbl_contact', $values);
				if ($insert_id) {
					echo json_encode(['status' => 'success', 'message' => 'Your contact has been successfully saved!']);
				} else {
					echo json_encode(['status' => 'error', 'message' => 'Failed to add contact.']);
				}
			} else {
				echo json_encode(['status' => 'error', 'message' => 'reCAPTCHA verification failed. Please try again.']);
			}
		}
	}


	public function contact_delete($id)
	{

		$where['id'] = $id;
		$values['status'] = 0;
		$this->Common->update('tbl_contact', $values, $where);
		$this->session->set_flashdata('success', 'Contact deleted successfully');
		redirect('contact_list');
	}

	public function tour_enqury_save()
	{
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('fullname', 'fullname', 'required');

		if ($this->form_validation->run() == FALSE) {
			$errors = [
				'fullname' => form_error('fullname')
			];
			echo json_encode(['status' => 'error', 'errors' => $errors]);
		} else {
			$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
			$userIp = $this->input->ip_address();
			$secret = '6LdSQz4qAAAAAK8lHo9oi4JdtSBGSE58sr7wB6jN';
			$url = 'https://www.google.com/recaptcha/api/siteverify';

			$response = file_get_contents($url . '?secret=' . $secret . '&response=' . $recaptchaResponse . '&remoteip=' . $userIp);
			$status = json_decode($response, true);

			if ($status['success']) {
				$values = [
					'fullname' => $this->input->post('fullname'),
					'mobile_no' => $this->input->post('mobile_no'),
					'email' => $this->input->post('email'),
					'adult' => $this->input->post('adult'),
					'below_child' => $this->input->post('below_child'),
					'date' => $this->input->post('date'),
					'vacation_type' => $this->input->post('vacation_type'),
				];

				$insert_id = $this->Common->insert('tbl_tour_enqury', $values);
				if ($insert_id) {
					echo json_encode(['status' => 'success', 'message' => 'Your Tour Enquery has been successfully saved!']);
				} else {
					echo json_encode(['status' => 'error', 'message' => 'Failed to add Tour Enquery.']);
				}
			} else {
				echo json_encode(['status' => 'error', 'message' => 'reCAPTCHA verification failed. Please try again.']);
			}
		}
	}

	public function tour_enqury_delete($id)
	{

		$where['id'] = $id;
		$values['status'] = 0;
		$this->Common->update('tbl_tour_enqury', $values, $where);
		$this->session->set_flashdata('success', 'Enqury deleted successfully');
		redirect('tour_enqury_list');
	}

	public function hotel_enqury_save()
	{
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('hotel_room_type', 'hotel_room_type', 'required');

		if ($this->form_validation->run() == FALSE) {
			$errors = [
				'hotel_room_type' => form_error('name')
			];
			echo json_encode(['status' => 'error', 'errors' => $errors]);
		} else {
			$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
			$userIp = $this->input->ip_address();
			$secret = '6LdSQz4qAAAAAK8lHo9oi4JdtSBGSE58sr7wB6jN';
			$url = 'https://www.google.com/recaptcha/api/siteverify';

			$response = file_get_contents($url . '?secret=' . $secret . '&response=' . $recaptchaResponse . '&remoteip=' . $userIp);
			$status = json_decode($response, true);

			if ($status['success']) {
				$values = [
					'room_type' => $this->input->post('hotel_room_type'),
					'no_of_rooms' => $this->input->post('hotel_no_of_rooms'),
					'add_bed' => $this->input->post('add_bed'),
					'price' => $this->input->post('price'),
					'gst' => $this->input->post('gst'),
					'name' => $this->input->post('name'),
					'mobile' => $this->input->post('mobile'),
					'location' => $this->input->post('location'),
					'check_in' => $this->input->post('check_in'),
					'check_out' => $this->input->post('check_out'),
				];

				$insert_id = $this->Common->insert('tbl_hotel_enqury', $values);
				if ($insert_id) {
					echo json_encode(['status' => 'success', 'message' => 'Your Enquery has been successfully saved!']);
				} else {
					echo json_encode(['status' => 'error', 'message' => 'Failed to add Enquery.']);
				}
			} else {
				echo json_encode(['status' => 'error', 'message' => 'reCAPTCHA verification failed. Please try again.']);
			}
		}
	}

	public function hotel_enqury_delete($id)
	{

		$where['id'] = $id;
		$values['status'] = 0;
		$this->Common->update('tbl_hotel_enqury', $values, $where);
		$this->session->set_flashdata('success', 'Enqury deleted successfully');
		redirect('tour_enqury_list');
	}
}
