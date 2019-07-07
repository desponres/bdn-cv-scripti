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
<link href="<?php echo base_url("assets/css/sweetalert2.min.css"); ?>" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer bg-dark sidenav-toggled" id="page-top">
<?php $this->load->view("admin/menu");?>
<div class="content-wrapper">
<div class="container-fluid">
<!-- Breadcrumbs-->
<ol class="breadcrumb">
<li class="breadcrumb-item">
<a href="<?php echo base_url("admin"); ?>">Panel</a>
</li>
<li class="breadcrumb-item active">Anasayfa</li>
</ol>
<!-- Icon Cards-->
<div class="row">
<div class="col-xl-3 col-sm-6 mb-3">
<div class="card text-white bg-primary o-hidden h-100">
<div class="card-body">
<div class="card-body-icon">
<i class="fa fa-fw fa-star"></i>
</div>
<div class="mr-5"><?php echo $istatistikler['deneyim_sayisi']; ?> Deneyim</div>
</div>
<a class="card-footer text-white clearfix small z-1" href="<?php echo base_url("admin/deneyimlerim"); ?>">
<span class="float-left">Detayları görüntüle</span>
<span class="float-right">
<i class="fa fa-angle-right"></i>
</span>
</a>
</div>
</div>
<div class="col-xl-3 col-sm-6 mb-3">
<div class="card text-white bg-warning o-hidden h-100">
<div class="card-body">
<div class="card-body-icon">
<i class="fa fa-fw fa-certificate"></i>
</div>
<div class="mr-5"><?php echo $istatistikler['yetenek_sayisi']; ?> Yetenek</div>
</div>
<a class="card-footer text-white clearfix small z-1" href="<?php echo base_url("admin/yeteneklerim"); ?>">
<span class="float-left">Detayları görüntüle</span>
<span class="float-right">
<i class="fa fa-angle-right"></i>
</span>
</a>
</div>
</div>
<div class="col-xl-3 col-sm-6 mb-3">
<div class="card text-white bg-success o-hidden h-100">
<div class="card-body">
<div class="card-body-icon">
<i class="fa fa-fw fa-trophy"></i>
</div>
<div class="mr-5"><?php echo $istatistikler['sertifika_odul_sayisi']; ?> Sertifika & Ödül</div>
</div>
<a class="card-footer text-white clearfix small z-1" href="<?php echo base_url("admin/sertifikalarim"); ?>">
<span class="float-left">Detayları görüntüle</span>
<span class="float-right">
<i class="fa fa-angle-right"></i>
</span>
</a>
</div>
</div>
<div class="col-xl-3 col-sm-6 mb-3">
<div class="card text-white bg-danger o-hidden h-100">
<div class="card-body">
<div class="card-body-icon">
<i class="fa fa-fw fa-support"></i>
</div>
<div class="mr-5"><?php echo $istatistikler['iletisim_mesaj_sayisi']; ?> İletişim Mesajları</div>
</div>
<a class="card-footer text-white clearfix small z-1" href="<?php echo base_url("admin/iletisim"); ?>">
<span class="float-left">Detayları görüntüle</span>
<span class="float-right">
<i class="fa fa-angle-right"></i>
</span>
</a>
</div>
</div>
<div class="col-lg-12">
 <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-support"></i>
            İletişim Mesajları</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Gönderen Kişi</th>
                    <th>E-Posta Adresi</th>
                    <th>Konu</th>
                    <th>Gönderilme Tarihi</th>
                    <th>İşlemler</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Gönderen Kişi</th>
                    <th>E-Posta Adresi</th>
                    <th>Konu</th>
                    <th>Gönderilme Tarihi</th>
                    <th>İşlemler</th>
                  </tr>
                </tfoot>
                <tbody>
                  
                <?php foreach ($iletisim_list as $row) { ?>
                <tr>
                <td><?php echo $row->gonderen_ad_soyad; ?></td>
                <td><?php echo $row->gonderen_email; ?></td>
                <td><?php echo $row->konu; ?></td>
                <td><?php echo $row->createdAt; ?></td>
                <td><a href="<?php echo base_url("admin/iletisim/$row->id"); ?>" class="btn btn-sm btn-secondary">Görüntüle</a> <a href="<?php echo base_url("admin/iletisim/sil/$row->id"); ?>" class="btn btn-sm btn-danger">Sil</a></td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
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
</html>