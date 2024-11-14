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

		//$this->load->helper('text');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->data['page'] = 'index';
		$this->load->vars($this->data);
		$this->load->view($this->data['theme'] . '/template');
	}

	public function package_view()
	{

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

	public function blog()
	{
		$this->data['blog'] = $this->Common->get_records("tbl_blog", "*", array('status' => 0));
		$this->data['page'] = 'blog';
		$this->load->vars($this->data);
		$this->load->view($this->data['theme'] . '/template');
	}

	public function blog_view($id)
	{
		$this->data['blog'] = $this->blog->get_blog($id);

		$this->data['meta'] = [
			'meta_tag' => $this->data['blog']->meta_tag,
			'meta_description' => $this->data['blog']->meta_description,
			'meta_title' => $this->data['blog']->meta_title
		];

		$this->data['page'] = 'blog_view';
		$this->load->vars($this->data);
		$this->load->view($this->data['theme'] . '/template');
	}

	public function appointment_save()
	{
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('phone_number', 'Phone Number', 'required|regex_match[/^[0-9]{10}$/]', ['regex_match' => 'Phone Number must be 10 digits.']);

		if ($this->form_validation->run() == FALSE) {
			$errors = [
				'name' => form_error('name'),
				'phone_number' => form_error('phone_number')
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
					'phone_number' => $this->input->post('phone_number'),
					'address' => $this->input->post('address'),
					'service' => $this->input->post('service'),
					'appointment_date' => $this->input->post('appointment_date'),
					'appointment_time' => $this->input->post('appointment_time'),
					'message' => $this->input->post('message')
				];

				$insert_id = $this->Common->insert('tbl_appointment', $values);
				if ($insert_id) {
					echo json_encode(['status' => 'success', 'message' => 'Your appointment has been successfully saved!']);
				} else {
					echo json_encode(['status' => 'error', 'message' => 'Failed to add appointment.']);
				}
			} else {
				echo json_encode(['status' => 'error', 'message' => 'reCAPTCHA verification failed. Please try again.']);
			}
		}

		// $values['name'] = $this->input->post('name');
		// $values['phone_number'] = $this->input->post('phone_number');
		// $values['address'] = $this->input->post('address');
		// $values['service'] = $this->input->post('service');
		// $values['appointment_date'] = $this->input->post('appointment_date');
		// $values['appointment_time'] = $this->input->post('appointment_time');
		// $values['message'] = $this->input->post('message');

		// $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
		// $userIp = $this->input->ip_address();
		// $secret = '6LdSQz4qAAAAAK8lHo9oi4JdtSBGSE58sr7wB6jN';
		// $url = 'https://www.google.com/recaptcha/api/siteverify';

		// $response = file_get_contents($url . '?secret=' . $secret . '&response=' . $recaptchaResponse . '&remoteip=' . $userIp);
		// $status = json_decode($response, true);

		// if ($status['success']) {
		// 	$insert_id = $this->Common->insert('tbl_appointment', $values);
		// 	if ($insert_id) {

		// 		echo json_encode(['status' => 'success', 'message' => 'Your appointment has been successfully saved!']);
		// 	} else {
		// 		echo json_encode(['status' => 'error', 'message' => 'Failed to add appointment.']);
		// 	}
		// } else {
		// 	echo json_encode(['status' => 'error', 'message' => 'reCAPTCHA verification failed. Please try again.']);
		// }
	}

	public function appointment_delete($id)
	{

		$where['id'] = $id;
		$values['status'] = 1;
		$this->Common->update('tbl_appointment', $values, $where);
		$this->session->set_flashdata('success', 'Appointment deleted successfully');
		redirect('appointment_list');
	}

	public function contact_save()
	{

		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('phone_number', 'Phone Number', 'required|regex_match[/^[0-9]{10}$/]', ['regex_match' => 'Phone Number must be 10 digits.']);

		if ($this->form_validation->run() == FALSE) {
			$errors = [
				'name' => form_error('name'),
				'email' => form_error('email'),
				'phone_number' => form_error('phone_number')
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
					'phone_number' => $this->input->post('phone_number'),
					'subject' => $this->input->post('subject'),
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
		$values['status'] = 1;
		$this->Common->update('tbl_contact', $values, $where);
		$this->session->set_flashdata('success', 'Contact deleted successfully');
		redirect('contact_list');
	}
}
