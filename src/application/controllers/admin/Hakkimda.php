<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hakkimda extends CI_Controller {

    public function __construct(){
         parent::__construct();

        $user = $this->session->userdata("user");

        if(!$user){
            redirect(base_url("admin"));
        }
    }
    
	public function index(){
        
        //Hakkımda bilgileri veritabanından getirme
        $hakkimda = $this->hakkimda_model->get_all();
        
        //2 Adet data gönderme
        $data = array(
        'hakkimda' => $hakkimda,
        'title' => "Hakkımda | Admin Paneli",
        );
        $this->load->view("admin/hakkimda", $data);
	}

    
    public function update(){

        $img = $_FILES["hk_resim"]["name"];


        if($img){

            $config["upload_path"]   = "uploads/";
            $config["allowed_types"] = "gif|jpg|png";
    
            $this->load->library("upload", $config);
    
            $upload = $this->upload->do_upload("hk_resim");
    
            if($upload){

                //Resim varsa
                $data = array(
                    "hk_ad_soyad" => $this->input->post("hk_ad_soyad"),
                    "hk_adres" => $this->input->post("hk_adres"),
                    "hk_email" => $this->input->post("hk_email"),
                    "hk_icerik" => $this->input->post("hk_icerik"),
                    "hk_resim" => $this->upload->data("file_name"),
                    "guncelleyen_id" => $this->input->post("guncelleyen_id"),
                    "updatedAt" => date("Y-m-d H:i:s")
                    );
                
            } else {
    
                $alert = array(
                    "title" => "İşlem Başarısızdır!!",
                    "text" => "Upload işlemi sırasında bir hata oluştu...",
                    "type" => "error"
                );
            }
    
    
    
        } else {
            //Resim yoksa
            $data = array(
                "hk_ad_soyad" => $this->input->post("hk_ad_soyad"),
                "hk_adres" => $this->input->post("hk_adres"),
                "hk_email" => $this->input->post("hk_email"),
                "hk_icerik" => $this->input->post("hk_icerik"),
                "guncelleyen_id" => $this->input->post("guncelleyen_id"),
                "updatedAt" => date("Y-m-d H:i:s")
                );
            
        }
        
        $update = $this->hakkimda_model->update($data);
        
        if($update){
            
            $alert = array(
                "title" => "İşlem Başarılıdır",
                "text" => "Güncelleme işlemi başarılıdır...",
                "type" => "success"
            );
        }
        else{
            $alert = array(
                "title" => "İşlem Başarısızdır!!",
                "text" => "Güncelleme işlemi başarısızdır...",
                "type" => "error"
            );
        }
        
        $this->session->set_flashdata("alert", $alert);
        redirect(base_url("admin/hakkimda"));
    }
        

}