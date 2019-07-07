<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sertifikalarim extends CI_Controller {

    public function __construct(){
         parent::__construct();
         
        $user = $this->session->userdata("user");
        if(!$user){
        redirect(base_url("admin"));
        }
        
      
     }
    
	public function index(){

        $list = $this->sertifikalarim_model->get_all();
        $viewData["list"] = $list;
        $data = array(
        'list' => $list,
        'title' => "Sertifikalarım ve Ödüllerim | Admin Paneli",
        );
        $this->load->view("admin/sertifikalarim",  $data);
        
	} 
    
    public function insert_form(){

        $data = array(
        'title' => "Sertifika&Ödül Ekle | Admin Paneli",
        );
        $this->load->view("admin/sertifikalarim_ekle", $data);
    }
    public function insert(){        
        $sertifika_adi = $this->input->post("sertifika_adi");
        $sertifika_durum = $this->input->post("sertifika_durum");
        $yazar_id = $this->input->post("yazar_id");
        $createdAt   = date("Y-m-d H:i:s");
        
        if($sertifika_adi && $sertifika_durum && $yazar_id){
            
            $data = array(
                "sertifika_adi"   => $sertifika_adi,
                "sertifika_durum"   => $sertifika_durum,
                "yazar_id"   => $yazar_id,
                "createdAt"     => $createdAt
            );
            $insert = $this->sertifikalarim_model->insert($data);
                        
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
        redirect(base_url("admin/sertifikalarim"));
        

    }
    
    public function update_form($id){
        
        $where = array(
            "id" => $id
        );
        
        $sertifikalarim = $this->sertifikalarim_model->get($where);


        $data = array(
        'sertifikalarim' => $sertifikalarim,
        'title' => "Sertifika&Ödül Düzenle | Admin Paneli"
        );

        $data['sertifikalarim'] = $this->sertifikalarim_model->get($where);
        if (is_null($data['sertifikalarim']->sertifika_durum) || ($id == '')) {
            redirect(base_url("admin/sertifikalarim"));
        }

        $this->load->view("admin/sertifikalarim_duzenle", $data);
    }
    
    public function update($id){

        $sertifika_adi = $this->input->post("sertifika_adi");
        $sertifika_durum = $this->input->post("sertifika_durum");
        $yazar_id = $this->input->post("yazar_id");
        $updatedAt   = date("Y-m-d H:i:s");

        $data = array(
            "sertifika_adi"   => $sertifika_adi,
            "sertifika_durum"   => $sertifika_durum,
            "yazar_id"   => $yazar_id,
            "updatedAt"     => $updatedAt
        );

        $where = array(
            "id" => $id,
        );
        
        $update = $this->sertifikalarim_model->update($where, $data);
        
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
        redirect(base_url("admin/sertifikalarim"));
    }
    
    public function delete($id){
        
        $where = array(
            "id" => $id
        );
        
        $delete = $this->sertifikalarim_model->delete($where);
        
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
        redirect(base_url("admin/sertifikalarim"));
    }
    

}