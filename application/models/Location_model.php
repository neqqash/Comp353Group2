<?php
class Location_model extends CI_Model {
    
    public function get_locations() {
        $query = $this->db->get('Location');
        return $query->result_array();
    }

    public function get_provinces() {
        $this->db->distinct();
        $this->db->select('province');
        $this->db->from('Location');
        $query = $this->db->get();
        return $query->result_array();
    }
}