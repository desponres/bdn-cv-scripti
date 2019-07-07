<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deneyimlerim extends CI_Controller {

    public function __construct(){
         parent::__construct();
         
        $user = $this->session->userdata("user");
        if(!$user){
        redirect(base_url("admin"));
        }
        
      
     }
    
	public function index(){

        $list = $this->deneyimlerim_model->get_all();
        $viewData["list"] = $list;
        $data = array(
        'list' => $list,
        'title' => "Deneyimlerim | Admin Paneli",
        );
        $this->load->view("admin/deneyimlerim",  $data);
        
	} 
    
    public function insert_form(){

        $data = array(
        'title' => "Deneyim Ekle | Admin Paneli",
        );
        $this->load->view("admin/deneyimlerim_ekle", $data);
    }
    public function insert(){        
        $dny_adi = $this->input->post("dny_adi");
        $dny_firma_adi = $this->input->post("dny_firma_adi");
        $dny_calisma_tarihleri = $this->input->post("dny_calisma_tarihleri");
        $dny_aciklama = $this->input->post("dny_aciklama");
        $dny_durum = $this->input->post("dny_durum");
        $yazar_id = $this->input->post("yazar_id");
        $createdAt   = date("Y-m-d H:i:s");
        
        if($dny_adi && $dny_firma_adi && $dny_calisma_tarihleri && $dny_durum && $yazar_id){
            
            $data = array(
                "dny_adi"   => $dny_adi,
                "dny_firma_adi"   => $dny_firma_adi,
                "dny_calisma_tarihleri"   => $dny_calisma_tarihleri,
                "dny_aciklama"   => $dny_aciklama,
                "dny_durum"   => $dny_durum,
                "yazar_id"   => $yazar_id,
                "createdAt"     => $createdAt
            );
            $insert = $this->deneyimlerim_model->insert($data);
                        
            if($insert){
            $alert = array(
                "title" => "İşlem Başarılıdır",
                "text" => "Ekleme işlemi başarılıdır...",
                "type" => "success"
            );
            }
            else{
            $alert = array(
                "title" => "İşlem Başarısızdır!!",
                "text" => "Ekleme işlemi başarısızdır...",
                "type" => "error"
            );
            } 
        }else{
            
            $alert = array(
                "title" => "İşlem Başarısızdır!!",
                "text" => "Lütfen boş alan bırakmayınız...",
                "type" => "error"
            );
        }
        
        
        $this->session->set_flashdata("alert", $alert);
        redirect(base_url("admin/deneyimlerim"));
        

    }
    
    public function update_form($id){
        
        $where = array(
            "id" => $id
        );
        
        $deneyimler = $this->deneyimlerim_model->get($where);


        $data = array(
        'deneyimler' => $deneyimler,
        'title' => "Deneyim Düzenle | Admin Paneli"
        );

        $data['deneyimler'] = $this->deneyimlerim_model->get($where);
        if (is_null($data['deneyimler']->dny_durum) || ($id == '')) {
            redirect(base_url("admin/deneyimlerim"));
        }

        $this->load->view("admin/deneyimlerim_duzenle", $data);
    }
    
    public function update($id){

        $dny_adi = $this->input->post("dny_adi");
        $dny_firma_adi = $this->input->post("dny_firma_adi");
        $dny_calisma_tarihleri = $this->input->post("dny_calisma_tarihleri");
        $dny_aciklama = $this->input->post("dny_aciklama");
        $dny_durum = $this->input->post("dny_durum");
        $yazar_id = $this->input->post("yazar_id");
        $updatedAt   = date("Y-m-d H:i:s");

        $data = array(
            "dny_adi"   => $dny_adi,
            "dny_firma_adi"   => $dny_firma_adi,
            "dny_calisma_tarihleri"   => $dny_calisma_tarihleri,
            "dny_aciklama"   => $dny_aciklama,
            "dny_durum"   => $dny_durum,
            "yazar_id"   => $yazar_id,
            "updatedAt"     => $updatedAt
        );

        $where = array(
            "id" => $id,
        );
        
        $update = $this->deneyimlerim_model->update($where, $data);
        
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
        redirect(base_url("admin/deneyimlerim"));
    }
    
    public function delete($id){
        
        $where = array(
            "id" => $id
        );
        
        $delete = $this->deneyimlerim_model->delete($where);
        
        if($delete){
            
            $alert = array(
                "title" => "İşlem Başarılıdır!!",
                "text" => "Silme işlemi başarılıdır...",
                "type" => "success"
            );
        }else {
            
            $alert = array(
                "title" => "İşlem Başarısızdır!!",
                "text" => "Silme işlemi başarısızdır...",
                "type" => "error"
            );
        }
        
        $this->session->set_flashdata("alert", $alert);
        redirect(base_url("admin/deneyimlerim"));
    }
    

}