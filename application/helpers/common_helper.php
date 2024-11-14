<?php

function get_branchname($branch_id)
{
    $CI = get_instance();
    $CI->load->model("Common_model");
    $data = $CI->Common_model->get_record("tbl_branch", "branch_name", array("status" => 1, "branch_id" => $branch_id));
    if (isset($data->branch_name))
        return $data->branch_name;
    else
        return "-";
}

function get_branch($user_id){
	
	$CI = get_instance();
    $CI->load->model("Common_model");
    $data = $CI->Common_model->get_record("tbl_users", "branch_id", array("status" => 1, "user_id" => $user_id));
    if (isset($data->branch_id))
        return $data->branch_id;
    else
        return "-";
}

function get_user($user_id){
	
	$CI = get_instance();
    $CI->load->model("Common_model");
    $data = $CI->Common_model->get_record("tbl_users", "user_name", array("status" => 1, "user_id" => $user_id));
    if (isset($data->user_name))
        return $data->user_name;
    else
        return "-";
}

