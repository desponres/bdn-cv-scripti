<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/ayarlar_model');
    }
}

class Genel_MY_Controller extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $global_data['ayarlar'] = $this->ayarlar_model->ayarlari_getir();
        $this->ayarlar = $global_data['ayarlar'];

        $this->load->vars($global_data);
    }
}