<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deneyimlerim_model extends CI_Model {

	public function get_all(){
		
        $result = $this->db->get("brkdndr_deneyimlerim")->result();
        
        return $result;
	}

    public function get($where){
        
		$result = $this->db->where($where)->get("brkdndr_deneyimlerim")->row();
        
        return $result;
	}
    
    public function insert($data){
                
        $insert = $this->db->insert("brkdndr_deneyimlerim", $data);
        return $insert;
		
	}
    
    public function update($where, $data){
		
        $update = $this->db->where($where)->update("brkdndr_deneyimlerim", $data);
        return $update;
	}
    
    public function delete($where){
		
        $delete = $this->db->where($where)->delete("brkdndr_deneyimlerim");
        return $delete;
	}
}
