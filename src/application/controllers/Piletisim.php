<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Piletisim extends Genel_MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('fonksiyonlar');

    }

	public function index()
	{
     //boş
	}

    public function form_gonder(){
        $gonderen_ad_soyad = $this->input->post("gonderen_ad_soyad");
        $gonderen_email = $this->input->post("gonderen_email");
        $konu    = $this->input->post("konu");
        $mesaj    = $this->input->post("mesaj");
        $iletisim_durum    = "1";
        $createdAt   = date("Y-m-d H:i:s");

        if($gonderen_ad_soyad && $gonderen_email && $konu && $mesaj){

            $data = array(
                "gonderen_ad_soyad"   => $gonderen_ad_soyad,
                "gonderen_email"   => $gonderen_email,
                "konu"      => $konu,
                "mesaj"    => $mesaj,
                "iletisim_durum"    => $iletisim_durum,
                "createdAt"     => $createdAt
            );
            $insert = $this->piletisim_model->insert($data);



            if($insert){
                $alert = array(
                    "title" => "",
                    "text" => "Mesajınız başarıyla gönderilmiştir, vermiş olduğunuz email adresi üzerinden iletişime geçilecektir...",
                    "type" => "success"
                );
            }
            else{
                $alert = array(
                    "title" => "",
                    "text" => "Mesajınız gönderilirken bir hata oluştu. Lütfen daha sonra tekrar deneyiniz...",
                    "type" => "error"
                );
            }

        }else{

            $alert = array(
                "title" => "",
                "text" => "Lütfen boş alan bırakmayınız.",
                "type" => "error"
            );
        }


        $this->session->set_flashdata("alert", $alert);
        redirect(base_url("#iletisim"));


    }
}
