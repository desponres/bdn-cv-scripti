<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anasayfa extends Genel_MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('fonksiyonlar');
    }

    public function index(){

        //Ayarları veritabanından getirme
        $genel_ayarlar = $this->ayarlar_model->get_all();

        //Hakkımda veritabanından getirme
        $hakkimda = $this->anasayfa_model->hakkimda_getir();

        //Deneyimleri veritabanından getirme
        $deneyim_listesi = $this->anasayfa_model->deneyim_getir();

        //Eğitimleri veritabanından getirme
        $egitim_listesi = $this->anasayfa_model->egitim_getir();

        //Yetenekleri veritabanından getirme
        $yetenek_listesi = $this->anasayfa_model->yetenek_getir();

        //İlgi Alanlarımı veritabanından getirme
        $ilgi_alanlarim = $this->anasayfa_model->ilgi_alanlari_getir();

        //Sertifikalarımı veritabanından getirme
        $sertifikalarim = $this->anasayfa_model->sertifikalari_getir();
    
        $data = array(
            'genel_ayarlar' => $genel_ayarlar,
            'hakkimda' => $hakkimda,
            'deneyim_listesi' => $deneyim_listesi,
            'egitim_listesi' => $egitim_listesi,
            'yetenek_listesi' => $yetenek_listesi,
            'ilgi_alanlarim' => $ilgi_alanlarim,
            'sertifikalarim' => $sertifikalarim
        );
        $this->load->view("anasayfa", $data);

    }
}
