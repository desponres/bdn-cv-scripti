<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sertifikalarim_model extends CI_Model {

	public function get_all(){
		
        $result = $this->db->get("brkdndr_sertifikalarim")->result();
        
        return $result;
	}

    public function get($where){
        
		$result = $this->db->where($where)->get("brkdndr_sertifikalarim")->row();
        
        return $result;
	}
    
    public function insert($data){
                
        $insert = $this->db->insert("brkdndr_sertifikalarim", $data);
        return $insert;
		
	}
    
    public function update($where, $data){
		
        $update = $this->db->where($where)->update("brkdndr_sertifikalarim", $data);
        return $update;
	}
    
    public function delete($where){
		
        $delete = $this->db->where($where)->delete("brkdndr_sertifikalarim");
        return $delete;
	}
}
