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


    // public function get_blog_by_slug($slug = NULL) {
    //     $this->db->where('status', 0);
    
    //     // If a slug is provided, try to match the blog by title
    //     if ($slug) {
    //         $this->db->like('title', str_replace('-', ' ', $slug)); // Match slug with title
    //         return $this->db->get('tbl_blog')->row();
    //     }
        
    //     $this->db->order_by('id', 'desc');
    //     return $this->db->get('tbl_blog')->result();
    // }
    
    
    // public function generate_slug($title, $id) {
    //     // Create a URL-friendly slug, limiting it to 20 characters
    //     $slug = url_title(substr($title, 0, 20), 'dash', TRUE);
    
    //     // Update the slug in the database if not already set
    //     $this->db->where('id', $id);
    //     $this->db->update('tbl_blog', ['slug' => $slug]);
    
    //     return $slug;
    // }
    

}