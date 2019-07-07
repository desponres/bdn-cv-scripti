<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hakkimda_model extends CI_Model {

	public function get_all(){
		
        $result = $this->db->get("brkdndr_hakkimda")->result();
        
        return $result;
	}
        
    public function update($data){
		
        $update = $this->db->update("brkdndr_hakkimda", $data);
        return $update;
	}
    public function hakkimda_getir(){
        $query = $this->db->get_where('brkdndr_hakkimda', array('id' => 1));
        return $query->row();
    }
}
