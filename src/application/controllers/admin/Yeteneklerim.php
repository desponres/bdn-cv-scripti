<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yeteneklerim extends CI_Controller {

    public function __construct(){
         parent::__construct();
         
        $user = $this->session->userdata("user");
        if(!$user){
        redirect(base_url("admin"));
        }
        
      
     }
    
	public function index(){

        $list = $this->yeteneklerim_model->get_all();
        $viewData["list"] = $list;
        $data = array(
        'list' => $list,
        'title' => "Yeteneklerim | Admin Paneli",
        );
        $this->load->view("admin/yeteneklerim",  $data);
        
	} 
    
    public function insert_form(){

    
        $data = array(
        'title' => "Yetenek Ekle | Admin Paneli",
        );
        $this->load->view("admin/yeteneklerim_ekle", $data);
    }
    public function insert(){        
        $yetenek_baslik = $this->input->post("yetenek_baslik");
    
        $yetenek_yuzde = $this->input->post("yetenek_yuzde");
        $yetenek_durum = $this->input->post("yetenek_durum");
        $yazar_id = $this->input->post("yazar_id");
        $createdAt   = date("Y-m-d H:i:s");
        
        if($yetenek_baslik && $yetenek_yuzde && $yazar_id){
            
            $data = array(
                "yetenek_baslik"   => $yetenek_baslik,
                "yetenek_yuzde"   => $yetenek_yuzde,
                "yetenek_durum"   => $yetenek_durum,
                "yazar_id"   => $yazar_id,
                "createdAt"     => $createdAt
            );
            $insert = $this->yeteneklerim_model->insert($data);
                        
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
        redirect(base_url("admin/yeteneklerim"));
        

    }
    
    public function update_form($id){
        
        $where = array(
            "id" => $id
        );
        
        $yeteneklerim = $this->yeteneklerim_model->get($where);
        $data = array(
        'yeteneklerim' => $yeteneklerim,
        'title' => "Yetenek Düzenle | Admin Paneli"
        );

        $data['yeteneklerim'] = $this->yeteneklerim_model->get($where);
        if (is_null($data['yeteneklerim']->yetenek_durum) || ($id == '')) {
            redirect(base_url("admin/yeteneklerim"));
        }

        $this->load->view("admin/yeteneklerim_duzenle", $data);
    }
    
    public function update($id){

        $yetenek_baslik = $this->input->post("yetenek_baslik");
        $yetenek_yuzde = $this->input->post("yetenek_yuzde");
        $yetenek_durum = $this->input->post("yetenek_durum");
        $yazar_id = $this->input->post("yazar_id");
        $updatedAt   = date("Y-m-d H:i:s");

        $data = array(
            "yetenek_baslik"   => $yetenek_baslik,
            "yetenek_yuzde"   => $yetenek_yuzde,
            "yetenek_durum"   => $yetenek_durum,
            "yazar_id"   => $yazar_id,
            "updatedAt"     => $updatedAt
        );

        $where = array(
            "id" => $id,
        );
        
        $update = $this->yeteneklerim_model->update($where, $data);
        
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
        redirect(base_url("admin/yeteneklerim"));
    }
    
    public function delete($id){
        
        $where = array(
            "id" => $id
        );
        
        $delete = $this->yeteneklerim_model->delete($where);
        
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
        redirect(base_url("admin/yeteneklerim"));
    }
    



}