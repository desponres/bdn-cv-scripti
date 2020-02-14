<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//
$route['sitemap\.xml'] = "Sitemap/index";
//
$route['admin'] = 'admin/admin/index';
$route['admin/index'] = 'admin/admin/index';
$route['admin/giris'] = 'admin/admin/giris_yap';
$route['admin/cikis'] = 'admin/admin/cikis_yap';
//
$route['default_controller'] = 'Anasayfa';
$route['anasayfa'] = 'Anasayfa/index';
$route['iletisim/gonder'] = 'Piletisim/form_gonder';
//
$route['admin/hakkimda'] = 'admin/hakkimda/index';
$route['admin/hakkimda/duzenle'] = 'admin/hakkimda/update';
//
$route['admin/deneyimlerim'] = 'admin/deneyimlerim/index';
$route['admin/deneyimlerim/ekle'] = 'admin/deneyimlerim/insert_form';
$route['admin/deneyimlerim/ekle/insert'] = 'admin/deneyimlerim/insert';
$route['admin/deneyimlerim/duzenle'] = 'admin/deneyimlerim/update_form';
$route['admin/deneyimlerim/duzenle/(:any)'] = 'admin/deneyimlerim/update_form/$1';
$route['admin/deneyimlerim/duzenle/update/(:any)'] = 'admin/deneyimlerim/update/$1';
$route['admin/deneyimlerim/sil/(:any)'] = 'admin/deneyimlerim/delete/$1';
//
$route['admin/egitimlerim'] = 'admin/egitimlerim/index';
$route['admin/egitimlerim/ekle'] = 'admin/egitimlerim/insert_form';
$route['admin/egitimlerim/ekle/insert'] = 'admin/egitimlerim/insert';
$route['admin/egitimlerim/duzenle'] = 'admin/egitimlerim/update_form';
$route['admin/egitimlerim/duzenle/(:any)'] = 'admin/egitimlerim/update_form/$1';
$route['admin/egitimlerim/duzenle/update/(:any)'] = 'admin/egitimlerim/update/$1';
$route['admin/egitimlerim/sil/(:any)'] = 'admin/egitimlerim/delete/$1';
//
$route['admin/ilgi-alanlarim'] = 'admin/pilgi_alanlarim/index';
$route['admin/ilgi-alanlarim/duzenle'] = 'admin/pilgi_alanlarim/update';
//
$route['admin/sertifikalarim'] = 'admin/sertifikalarim/index';
$route['admin/sertifikalarim/ekle'] = 'admin/sertifikalarim/insert_form';
$route['admin/sertifikalarim/ekle/insert'] = 'admin/sertifikalarim/insert';
$route['admin/sertifikalarim/duzenle'] = 'admin/sertifikalarim/update_form';
$route['admin/sertifikalarim/duzenle/(:any)'] = 'admin/sertifikalarim/update_form/$1';
$route['admin/sertifikalarim/duzenle/update/(:any)'] = 'admin/sertifikalarim/update/$1';
$route['admin/sertifikalarim/sil/(:any)'] = 'admin/sertifikalarim/delete/$1';
//
$route['admin/yeteneklerim'] = 'admin/yeteneklerim/index';
$route['admin/yeteneklerim/ekle'] = 'admin/yeteneklerim/insert_form';
$route['admin/yeteneklerim/ekle/insert'] = 'admin/yeteneklerim/insert';
$route['admin/yeteneklerim/duzenle'] = 'admin/yeteneklerim/update_form';
$route['admin/yeteneklerim/duzenle/(:any)'] = 'admin/yeteneklerim/update_form/$1';
$route['admin/yeteneklerim/duzenle/update/(:any)'] = 'admin/yeteneklerim/update/$1';
$route['admin/yeteneklerim/sil/(:any)'] = 'admin/yeteneklerim/delete/$1';
//
$route['admin/yetenek-kategori'] = 'admin/yeteneklerim/yetenek_kategori';
$route['admin/yetenek-kategori/ekle'] = 'admin/yeteneklerim/yetenek_kategori_insert_form';
$route['admin/yetenek-kategori/ekle/insert'] = 'admin/yeteneklerim/yetenek_kategori_insert';
$route['admin/yetenek-kategori/duzenle'] = 'admin/yeteneklerim/yetenek_kategori_update_form';
$route['admin/yetenek-kategori/duzenle/(:any)'] = 'admin/yeteneklerim/yetenek_kategori_update_form/$1';
$route['admin/yetenek-kategori/duzenle/update/(:any)'] = 'admin/yeteneklerim/yetenek_kategori_update/$1';
$route['admin/yetenek-kategori/sil/(:any)'] = 'admin/yeteneklerim/yetenek_kategori_delete/$1';
//
$route['admin/yoneticiler'] = 'admin/yoneticiler/index';
$route['admin/yoneticiler/ekle'] = 'admin/yoneticiler/insert_form';
$route['admin/yoneticiler/ekle/insert'] = 'admin/yoneticiler/insert';
$route['admin/yoneticiler/duzenle'] = 'admin/yoneticiler/update_form';
$route['admin/yoneticiler/duzenle/(:any)'] = 'admin/yoneticiler/update_form/$1';
$route['admin/yoneticiler/duzenle/update/(:any)'] = 'admin/yoneticiler/update/$1';
$route['admin/yoneticiler/sil/(:any)'] = 'admin/yoneticiler/delete/$1';
//
$route['admin/ayarlar'] = 'admin/ayarlar/index';
$route['admin/ayarlar/update'] = 'admin/ayarlar/update';
//
$route['admin/iletisim'] = 'admin/piletisim/index';
$route['admin/iletisim/(:num)'] = 'admin/piletisim/iletisim_icerik/$1';
$route['admin/iletisim/sil/(:any)'] = 'admin/piletisim/delete/$1';
//