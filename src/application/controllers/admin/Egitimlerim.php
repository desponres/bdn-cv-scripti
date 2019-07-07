<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Egitimlerim extends CI_Controller {

    public function __construct(){
         parent::__construct();
         
        $user = $this->session->userdata("user");
        if(!$user){
        redirect(base_url("admin"));
        }
        
      
     }
    
	public function index(){

        $list = $this->egitimlerim_model->get_all();
        $viewData["list"] = $list;
        $data = array(
        'list' => $list,
        'title' => "Eğitimlerim | Admin Paneli",
        );
        $this->load->view("admin/egitimlerim",  $data);
        
	} 
    
    public function insert_form(){

        $data = array(
        'title' => "Eğitim Ekle | Admin Paneli",
        );
        $this->load->view("admin/egitimlerim_ekle", $data);
    }
    public function insert(){        
        $eg_okul_adi = $this->input->post("eg_okul_adi");
        $eg_bolum_adi = $this->input->post("eg_bolum_adi");
        $eg_bolum_icerigi = $this->input->post("eg_bolum_icerigi");
        $eg_not_ortalamasi = $this->input->post("eg_not_ortalamasi");
        $eg_tarih = $this->input->post("eg_tarih");
        $eg_durum = $this->input->post("eg_durum");
        $yazar_id = $this->input->post("yazar_id");
        $createdAt   = date("Y-m-d H:i:s");
        
        if($eg_okul_adi && $eg_bolum_adi && $eg_tarih && $eg_durum && $yazar_id){
            
            $data = array(
                "eg_okul_adi"   => $eg_okul_adi,
                "eg_bolum_adi"   => $eg_bolum_adi,
                "eg_bolum_icerigi"   => $eg_bolum_icerigi,
                "eg_not_ortalamasi"   => $eg_not_ortalamasi,
                "eg_tarih"   => $eg_tarih,
                "eg_durum"   => $eg_durum,
                "yazar_id"   => $yazar_id,
                "createdAt"     => $createdAt
            );
            $insert = $this->egitimlerim_model->insert($data);
                        
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
        redirect(base_url("admin/egitimlerim"));
        

    }
    
    public function update_form($id){
        
        $where = array(
            "id" => $id
        );
        
        $egitimlerim = $this->egitimlerim_model->get($where);


        $data = array(
        'egitimlerim' => $egitimlerim,
        'title' => "Eğitim Düzenle | Admin Paneli"
        );

        $data['egitimlerim'] = $this->egitimlerim_model->get($where);
        if (is_null($data['egitimlerim']->eg_durum) || ($id == '')) {
            redirect(base_url("admin/egitimlerim"));
        }

        $this->load->view("admin/egitimlerim_duzenle", $data);
    }
    
    public function update($id){

        $eg_okul_adi = $this->input->post("eg_okul_adi");
        $eg_bolum_adi = $this->input->post("eg_bolum_adi");
        $eg_bolum_icerigi = $this->input->post("eg_bolum_icerigi");
        $eg_not_ortalamasi = $this->input->post("eg_not_ortalamasi");
        $eg_tarih = $this->input->post("eg_tarih");
        $eg_durum = $this->input->post("eg_durum");
        $yazar_id = $this->input->post("yazar_id");
        $updatedAt   = date("Y-m-d H:i:s");

        $data = array(
            "eg_okul_adi"   => $eg_okul_adi,
            "eg_bolum_adi"   => $eg_bolum_adi,
            "eg_bolum_icerigi"   => $eg_bolum_icerigi,
            "eg_not_ortalamasi"   => $eg_not_ortalamasi,
            "eg_tarih"   => $eg_tarih,
            "eg_durum"   => $eg_durum,
            "yazar_id"   => $yazar_id,
            "updatedAt"     => $updatedAt
        );

        $where = array(
            "id" => $id,
        );
        
        $update = $this->egitimlerim_model->update($where, $data);
        
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
        redirect(base_url("admin/egitimlerim"));
    }
    
    public function delete($id){
        
        $where = array(
            "id" => $id
        );
        
        $delete = $this->egitimlerim_model->delete($where);
        
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
        redirect(base_url("admin/egitimlerim"));
    }
    

}