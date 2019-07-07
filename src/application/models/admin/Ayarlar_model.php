<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ayarlar_model extends CI_Model {

	public function get_all(){
		
        $result = $this->db->get("brkdndr_genel_ayarlar")->result();
        
        return $result;
	}
        
    public function update($data){
		
        $update = $this->db->update("brkdndr_genel_ayarlar", $data);
        return $update;
	}
    public function ayarlari_getir(){
        $query = $this->db->get_where('brkdndr_genel_ayarlar', array('id' => 1));
        return $query->row();
    }
}
