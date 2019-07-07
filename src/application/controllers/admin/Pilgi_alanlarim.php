<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pilgi_alanlarim extends CI_Controller {

    public function __construct(){
         parent::__construct();

        $user = $this->session->userdata("user");

        if(!$user){
            redirect(base_url("admin"));
        }
    }
    
	public function index(){
        
        //İçeriği veritabanından getirme
        $ilgi_alanlarim = $this->pilgi_alanlarim_model->get_all();
        
        //2 Adet data gönderme
        $data = array(
        'ilgi_alanlarim' => $ilgi_alanlarim,
        'title' => "İlgi Alanlarım | Admin Paneli",
        );
        $this->load->view("admin/pilgi_alanlarim", $data);
	}

    
    public function update(){

            $data = array(
            "ilg_icerik" => $this->input->post("ilg_icerik"),
            "guncelleyen_id" => $this->input->post("guncelleyen_id"),
            "updatedAt" => date("Y-m-d H:i:s")
            );
        
        $update = $this->pilgi_alanlarim_model->update($data);
        
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
        redirect(base_url("admin/ilgi-alanlarim"));
    }
        

}