<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
    
    public function get($where = array()){
		$row = $this->db->where($where)->get("brkdndr_uyeler")->row();
        return $row;
	}
    
    function istatistikler(){
        
        $data['deneyim_sayisi'] = $this->db->count_all('brkdndr_deneyimlerim');
        $data['yetenek_sayisi'] = $this->db->count_all('brkdndr_yeteneklerim');
        $data['sertifika_odul_sayisi'] = $this->db->count_all('brkdndr_sertifikalarim');
        $data['iletisim_mesaj_sayisi'] = $this->db->count_all('brkdndr_iletisim');
    
        return $data;
        
        
        
    }
}
