<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Package_model extends CI_Model
{

    public function create_package($Category_name, $source, $status)
    {
        $package_data = array(
            'category_name' => $Category_name,
            'image' => $source,
            'status' => $status
        );

        $this->db->insert('tbl_package_category', $package_data);
    }

    public function update_category($id, $Category_name, $source)
    {
        if (!empty($source)) {
            $sql = "update tbl_package_category SET category_name = '$Category_name' ,image = '$source' where id = '$id'";
            $result = $this->db->query($sql);
        } else {
            $sql = "update tbl_package_category SET category_name = '$Category_name' where id = '$id'";
            $result = $this->db->query($sql);
        }
    }

    public function get_category_by_id($id)
    {
        $query = $this->db->get_where('tbl_package_category', array('id' => $id));
        return $query->row();
    }


    public function delete_category($id)
    {
        $this->db->query("UPDATE  tbl_package_category SET status = 0 Where id='$id'");
    }

    public function type_package($category_name, $Category_type, $source, $status)
    {
        $package_data = array(
            'category_name' => $category_name,
            'category_type' => $Category_type,
            'image' => $source,
            'status' => $status
        );

        $this->db->insert('tbl_package_type', $package_data);
    }

    public function update_type($id, $category_name, $Category_type, $source)
    {
        $data = array(
            'category_name' => $category_name,
            'category_type' => $Category_type
        );
        if (!empty($source)) {
            $data['image'] = $source;
        }

        $this->db->where('id', $id);
        $this->db->update('tbl_package_type', $data);
    }

    public function get_type_by_id($id)
    {
        $query = $this->db->get_where('tbl_package_type', array('id' => $id));
        return $query->row_array();
    }


    public function delete_type($id)
    {
        $this->db->query("UPDATE  tbl_package_type SET status = 0 Where id='$id'");
    }

    public function save_package($package_title, $package_type, $package_content, $standard_cost, $standard_price, $standard_description, $luxury_cost, $luxury_price, $luxury_description, $royal_cost, $royal_price, $royal_description, $adult, $child, $day_plans, $package_heading, $place, $package_inclusion, $package_exclusions, $source, $image_bundle, $status)
    {

        $package_data = array(
            'category_id' => $package_title,
            'type_id' => $package_type,
            'package_content' => $package_content,
            'standard_cost' => $standard_cost,
            'standard_price' => $standard_price,
            'standard_description' => $standard_description,
            'luxury_cost' => $luxury_cost,
            'luxury_price' => $luxury_price,
            'luxury_description' => $luxury_description,
            'royal_cost' => $royal_cost,
            'royal_price' => $royal_price,
            'royal_description' => $royal_description,
            'adult' => $adult,
            'child' => $child,
            'day_plans' => $day_plans,
            'package_heading' => $package_heading,
            'place' => $place,
            'package_inclusion' => $package_inclusion,
            'package_exclusions' => $package_exclusions,
            'image' => $source,
            'image_bundle' => $image_bundle,
            'status' => $status
        );

        $this->db->insert('tbl_package', $package_data);
    }

    public function get_list()
    {

        $query = $this->db->query("SELECT * FROM tbl_package WHERE status = 1");
        return $query->result();
    }

    public function create_list()
    {
        $query = $this->db->query("SELECT * FROM tbl_package_category WHERE status = 1");
        return $query->result();
    }

    public function type_list()
    {
        $query = $this->db->query("SELECT * FROM tbl_package_type WHERE status = 1");
        /* echo "<pre>";
		print_r($query);
		exit(); */
        return $query->result();
    }

    public function get_package_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tbl_package');
        return $query->row();
    }

    public function save_active_package($package_id, $title, $description, $status)
    {
        $package_plans_data = array(
            'package_id' => $package_id,
            'plan_title' => $title,
            'plan_description' => $description,
            'status' => $status
        );

        $this->db->insert('tbl_package_plans', $package_plans_data);
    }

    public function edit_package($id)
    {

        $sql = "select * from tbl_package where id = '$id'";
        $result = $this->db->query($sql);
        return $result->row();
    }

    public function update_package($package_title,$package_type, $package_content, $standard_cost,$standard_price,
        $standard_description,$luxury_cost,$luxury_price,$luxury_description,$royal_cost,$royal_price,
        $royal_description,$adult,$child, $day_plans,$package_heading,$place,$package_inclusion,
        $package_exclusions,$source, $image_bundle,$id) {
        $data = array(
            'category_id' => $package_title,
            'type_id' => $package_type,
            'package_content' => $package_content,
            'standard_cost' => $standard_cost,
            'standard_price' => $standard_price,
            'standard_description' => $standard_description,
            'luxury_cost' => $luxury_cost,
            'luxury_price' => $luxury_price,
            'luxury_description' => $luxury_description,
            'royal_cost' => $royal_cost,
            'royal_price' => $royal_price,
            'royal_description' => $royal_description,
            'adult' => $adult,
            'child' => $child,
            'day_plans' => $day_plans,
            'package_heading' => $package_heading,
            'place' => $place,
            'package_inclusion' => $package_inclusion,
            'package_exclusions' => $package_exclusions
        );

        if (!empty($source)) {
            $data['image'] = $source;
        }

        if (!empty($image_bundle)) {
            $data['image_bundle'] = $image_bundle;
        }

        $this->db->where('id', $id);
        $this->db->update('tbl_package', $data);
    }

    public function delete_package($id)
    {

        $this->db->query("UPDATE  tbl_package SET status = 0 Where id='$id'");
    }

    /* public function package_list(){
		$query = $this->db->query("SELECT DISTINCT package_title FROM pa_package WHERE status = 1");
		return $query->result();
	} */

    public function get_packages()
    {
        $query = $this->db->query("SELECT *FROM tbl_package_category WHERE status = 1");
        return $query->result();
    }

    public function get_type()
    {
        $query = $this->db->get('tbl_package_type');
        return $query->result();
    }

    public function plan_edit($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_package_plans');
        $this->db->where('package_id', $id);
        $this->db->where('status', 1);
        $query = $this->db->get();
        return $query->result();
    }

    public function update_plan($package_id, $plan_title, $plan_description)
    {
        if (empty($package_id)) {
            $package_plans_data = array(
                'package_id' => $package_id,
                'plan_title' => $plan_title,
                'plan_description' => $plan_description,
                'status' => 1
            );

            $this->db->insert('tbl_package_plans', $package_plans_data);
        } else {
            $data = array(
                'plan_title' => $plan_title,
                'plan_description' => $plan_description
            );

            $this->db->where('id', $package_id);
            $this->db->update('tbl_package_plans', $data);
        }
    }

    public function delete_plan($plan_id)
    {
        $this->db->set('status', 0);
        $this->db->where('id', $plan_id);
        return $this->db->update('tbl_package_plans');
    }

    public function get_packages_by_type($pack_id, $type_id)
    {
        $this->db->from('tbl_package');
        $this->db->where('type_id', $type_id);
        $this->db->where('category_id', $pack_id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
}
