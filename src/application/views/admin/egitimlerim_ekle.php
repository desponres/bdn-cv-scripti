<?php $admin = $this->session->userdata("admin"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo $title; ?></title>
<link href="<?php echo base_url("assets/a/vendor/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet">
<link href="<?php echo base_url("assets/a/vendor/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url("assets/a/vendor/datatables/dataTables.bootstrap4.css"); ?>" rel="stylesheet">
<link href="<?php echo base_url("assets/a/css/sb-admin.css"); ?>" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer bg-dark sidenav-toggled" id="page-top">
<?php $this->load->view("admin/menu");?>
<div class="content-wrapper">
<div class="container-fluid">
<ol class="breadcrumb">
<li class="breadcrumb-item">
<a href="<?php echo base_url("admin"); ?>">Panel</a>
</li>
<li class="breadcrumb-item active">Eğitim Ekle</li>
</ol>
<div class="card mb-3">
<div class="card-header">
<i class="fa fa-fw fa-graduation-cap"></i> Eğitim Ekle</div>
<div class="card-body">
<form action="<?php echo base_url("admin/egitimlerim/ekle/insert"); ?>" method="post">
<input type="hidden" name="yazar_id" value="<?php $user = $this->session->userdata("user"); echo $user["id"]; ?>">
<div class="form-group">
<label for="eg_okul_adi">Üniversite/Okul Adı</label>
<input type="text" class="form-control" id="eg_okul_adi" name="eg_okul_adi">
</div>
<div class="form-group">
<label for="eg_bolum_adi">Bölüm Adı</label>
<input type="text" class="form-control" id="eg_bolum_adi" name="eg_bolum_adi">
</div>
<div class="form-group">
<label for="eg_not_ortalamasi">Not Ortalaması</label>
<input type="text" class="form-control" id="eg_not_ortalamasi" name="eg_not_ortalamasi">
</div>
<div class="form-group">
<label for="eg_tarih">Eğitim Tarihleri</label>
<input type="text" class="form-control" id="eg_tarih" name="eg_tarih">
</div>
<div class="form-group">
<label for="eg_bolum_icerigi">Bölüm içeriği</label>
<textarea class="form-control" id="eg_bolum_icerigi" name="eg_bolum_icerigi" rows="5"></textarea>
</div>
<div class="form-group">
<label for="eg_durum">Onaylı mı?</label>
<select class="form-control" id="eg_durum" name="eg_durum">
<option value="1" selected>Onaylı</option>
<option value="0">Onaysız</option>
</select>
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary">Kaydet</button>
</div>
</form>
</div>
</div>
</div>
<footer class="sticky-footer">
<div class="container">
<div class="text-center">
<small>Copyright © Burak Dündar 2019</small>
</div>
</div>
</footer>
<a class="scroll-to-top rounded" href="#page-top">
<i class="fa fa-angle-up"></i>
</a>
<?php $this->load->view("admin/cikis_yap");?>
</div>
</body>
<script src="<?php echo base_url("assets/a/vendor/jquery/jquery.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/a/vendor/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/a/vendor/jquery-easing/jquery.easing.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/a/vendor/datatables/jquery.dataTables.js"); ?>"></script>
<script src="<?php echo base_url("assets/a/vendor/datatables/dataTables.bootstrap4.js"); ?>"></script>
<script src="<?php echo base_url("assets/a/js/sb-admin.js"); ?>"></script>
<script src="<?php echo base_url("assets/a/js/sb-admin-datatables.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/sweetalert2.all.js"); ?>"></script>
<?php $this->load->view("admin/alert"); ?>
</html>