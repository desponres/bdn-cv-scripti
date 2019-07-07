<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pilgi_alanlarim_model extends CI_Model {

    public function get_all(){
		
        $result = $this->db->get("brkdndr_ilgi_alanlarim")->result();
        
        return $result;
	}
        
    public function update($data){
		
        $update = $this->db->update("brkdndr_ilgi_alanlarim", $data);
        return $update;
	}
}
