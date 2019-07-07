<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yoneticiler_model extends CI_Model {

	public function get_all(){
		
        $result = $this->db->get("brkdndr_uyeler")->result();
        
        return $result;
	}

    public function get($where){
        
		$result = $this->db->where($where)->get("brkdndr_uyeler")->row();
        
        return $result;
	}
    
    public function insert($data){
                
        $insert = $this->db->insert("brkdndr_uyeler", $data);
        return $insert;
		
	}
    
    public function update($where, $data){
		
        $update = $this->db->where($where)->update("brkdndr_uyeler", $data);
        return $update;
	}
    
    public function delete($where){
		
        $delete = $this->db->where($where)->delete("brkdndr_uyeler");
        return $delete;
	}
}
