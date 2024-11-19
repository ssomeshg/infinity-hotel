<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog_model extends CI_Model
{
    public function getblog($id = NULL) {
		
        $this->db->where('status', 1);
        if ($id) {
            $this->db->where('id', $id);
            return $this->db->get('tbl_blog')->row();
        }
        $this->db->order_by('id', 'desc');
        return $this->db->get('tbl_blog')->result();
    }

    public function list_blog(){
		
        $query = $this->db->query("SELECT * FROM tbl_blog WHERE status = 0");
        return $query->result();
    }

    public function getgallery($id = NULL) {
		
        $this->db->where('status', 1);
        if ($id) {
            $this->db->where('id', $id);
            return $this->db->get('tbl_gallery')->row();
        }
        $this->db->order_by('id', 'desc');
        return $this->db->get('tbl_gallery')->result();
    }

    public function getbanner($id = NULL) {
		
        $this->db->where('status', 1);
        if ($id) {
            $this->db->where('id', $id);
            return $this->db->get('tbl_banner')->row();
        }
        $this->db->order_by('id', 'desc');
        return $this->db->get('tbl_banner')->result();
    }

    public function gettestimonial($id = NULL) {
		
        $this->db->where('status', 1);
        if ($id) {
            $this->db->where('id', $id);
            return $this->db->get('tbl_testimonial')->row();
        }
        $this->db->order_by('id', 'desc');
        return $this->db->get('tbl_testimonial')->result();
    }

    public function edit_gallery_category($id)
    {
        $query = $this->db->get_where('tbl_gallery_category', array('id' => $id));
        return $query->row();
    }
    

}