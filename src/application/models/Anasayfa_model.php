<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anasayfa_model extends CI_Model {

    public function hakkimda_getir(){
        $query = $this->db->get_where('brkdndr_hakkimda', array('id' => 1));
        return $query->row();
    }

    public function deneyim_getir(){
        $this->db->select('brkdndr_deneyimlerim.*');
        $this->db->where('brkdndr_deneyimlerim.dny_durum', 1);
        $query = $this->db->get('brkdndr_deneyimlerim')->result();
        return $query;
    }

    public function egitim_getir(){
        $this->db->select('brkdndr_egitimlerim.*');
        $this->db->where('brkdndr_egitimlerim.eg_durum', 1);
        $query = $this->db->get('brkdndr_egitimlerim')->result();
        return $query;
    }

    public function yetenek_getir(){
        $this->db->select('brkdndr_yeteneklerim.*');
        $this->db->where('brkdndr_yeteneklerim.yetenek_durum', 1);
        $query = $this->db->get('brkdndr_yeteneklerim')->result();
        return $query;
    }

    public function ilgi_alanlari_getir(){
        $query = $this->db->get_where('brkdndr_ilgi_alanlarim', array('id' => 1));
        return $query->row();
    }

    public function sertifikalari_getir(){
        $this->db->select('brkdndr_sertifikalarim.*');
        $this->db->where('brkdndr_sertifikalarim.sertifika_durum', 1);
        $query = $this->db->get('brkdndr_sertifikalarim')->result();
        return $query;
    }
}