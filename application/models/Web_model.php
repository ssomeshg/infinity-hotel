<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web_model extends CI_Model
{

	public function save_enquiry($fullname, $mobile_no, $email, $child, $adult,$above_child, $date, $vacation_type, $status)
	{

		$enquiry_data = array(
			'fullname' => $fullname,
			'mobile_no' => $mobile_no,
			'email' => $email,
			'child' => $child,
			'adult' => $adult,
			'above_child' => $above_child,
			'date' => $date,
			'vacation_type' => $vacation_type,
			'status' => $status
		);

		$this->db->insert('pa_enquiry', $enquiry_data);
	}

	public function get_list()
	{

		$query = $this->db->query("SELECT * FROM pa_enquiry WHERE status = 1");
		return $query->result();
	}

	public function delete_enquiry($id)
	{

		$this->db->query("UPDATE  pa_enquiry SET status = 0 Where id='$id'");
	}

	public function save_contact($name, $mobile_no, $email, $message, $status)
	{

		$contact_data = array(
			'name' => $name,
			'mobile_no' => $mobile_no,
			'email' => $email,
			'message' => $message,
			'status' => $status
		);

		$this->db->insert('pa_contact', $contact_data);
	}

	public function get_contact_list()
	{

		$query = $this->db->query("SELECT * FROM pa_contact WHERE status = 1");
		return $query->result();
	}

	public function delete_contact($id)
	{

		$this->db->query("UPDATE  pa_contact SET status = 0 Where id='$id'");
	}

	public function blog_list()
	{
		$query = $this->db->query("SELECT * FROM pa_blog where status = 1 ORDER BY id DESC LIMIT 3;");
		return $query->result();
	}

	public function get_package_by_id($id)
	{
		$query = $this->db->query("SELECT * FROM tbl_package WHERE id = $id AND status = 1");
		return $query->result();
	}

	public function get_plans_by_package_id($package_id)
	{
		$query = $this->db->query("SELECT * FROM tbl_package_plans WHERE package_id = $package_id AND status = 1");
		return $query->result();
	}

	public function get_category_name_id($category_name)
	{
		$query = $this->db->query("SELECT * FROM tbl_package_category WHERE category_name = ? AND status = 1", array($category_name));

		if ($query->num_rows() > 0) {
			$row = $query->row();
			return $row;
		} else {
			echo "No matching category found.";
			return null;
		}
	}
	


	public function get_package_by_title($category_id)
	{
		$this->db->select('*');
		$this->db->from('tbl_package');
		$this->db->where('category_id', $category_id);
		$this->db->where('status', 1);
		
		$query = $this->db->get();
		return $query->result();
	}

	public function get_category_type_id($category_type)
	{
		$query = $this->db->query("SELECT * FROM tbl_package_type WHERE category_type = ? AND status = 1", array($category_type));

		if ($query->num_rows() > 0) {
			$row = $query->row();
			return $row;
		} else {
			echo "No matching category found.";
			return null;
		}
	}


	public function get_package_by_title_and_type($category_id, $type_id)
	{
		$this->db->select('*');
		$this->db->from('tbl_package');
		$this->db->where('type_id', $type_id);
		$this->db->where('category_id', $category_id);
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}



	public function package_list()
	{
		$query = $this->db->query("
        SELECT p.category_id, COUNT(p.id) as package_count, p.image, c.category_name, MIN(p.standard_cost) as min_price 
        FROM tbl_package p
        JOIN tbl_package_category c ON p.category_id = c.id 
        WHERE p.status = 1
        GROUP BY p.category_id, c.category_name
        LIMIT 6
    ");
		return $query->result();
	}
	
	public function boat_list()
	{
		$query = $this->db->query("SELECT * FROM pa_boat where status = 1");
		return $query->result();
	}
	
}
