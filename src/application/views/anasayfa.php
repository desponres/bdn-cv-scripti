<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php echo strip_tags($ayarlar->site_title); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="all"/>
  <meta name="description" content="<?php echo strip_tags($ayarlar->site_description); ?>">
  <meta name="keywords" content="<?php echo strip_tags($ayarlar->site_keywords); ?>">
  <meta name="owner" content="Burak Dündar" />
  <meta name="copyright" content="Copyright Burak Dündar - Tüm Hakları Saklıdır." />
  <meta name="twitter:card" content="summary"/>
  <meta name="twitter:site" content="@desponres"/>
  <meta name="twitter:url" content="<?php echo base_url(); ?>">
  <meta name="twitter:title" content="<?php echo strip_tags($ayarlar->site_title); ?>">
  <meta name="twitter:description" content="<?php echo strip_tags($ayarlar->site_description); ?>">
  <meta name="twitter:image" content="<?php echo base_url("assets/images/bd.png"); ?>">
  <meta property="og:locale" content="tr_TR">
  <meta property="og:title" content="<?php echo strip_tags($ayarlar->site_title); ?>">
  <meta property="og:site_name" content="<?php echo strip_tags($ayarlar->site_title); ?>">
  <meta property="og:url" content="<?php echo base_url(); ?>">
  <meta property="og:image" content="<?php echo base_url("assets/images/bd.png"); ?>">
  <meta property="og:image:width" content="150">
  <meta property="og:image:height" content="150">
  <meta property="og:description" content="<?php echo strip_tags($ayarlar->site_description); ?>">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="<?php echo base_url("assets/vendor/fontawesome-free/css/all.min.css"); ?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url("assets/css/resume.min.css"); ?>" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none"><?php echo strip_tags($hakkimda->hk_ad_soyad); ?></span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo base_url("uploads/".$hakkimda->hk_resim); ?>" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#hakkimda">Hakkımda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#deneyimlerim">Deneyimlerim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#egitim">Eğitim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#yeteneklerim">Yeteneklerim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#ilgi_alanlarim">İlgi Alanlarım</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#sertifikalar_oduller">Sertifikalarım ve Ödüllerim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#iletisim">İletişim</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="hakkimda">
      <div class="w-100">
        <h1 class="mb-0"><?php echo strip_tags($hakkimda->hk_ad_soyad); ?></h1>
        <div class="subheading mb-5"><?php echo strip_tags($hakkimda->hk_adres); ?><br>
          <a href="mailto:name@email.com"><?php echo strip_tags($hakkimda->hk_email); ?></a>
        </div>
        <p class="lead mb-5"><?php echo strip_tags($hakkimda->hk_icerik); ?></p>
        <div class="social-icons">
          <a target="_blank" href="<?php echo strip_tags($ayarlar->site_linkedin); ?>">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a target="_blank" href="<?php echo strip_tags($ayarlar->site_github); ?>">
            <i class="fab fa-github"></i>
          </a>
          <a target="_blank" href="<?php echo strip_tags($ayarlar->site_twitter); ?>">
            <i class="fab fa-twitter"></i>
          </a>
          <a target="_blank" href="<?php echo strip_tags($ayarlar->site_facebook); ?>">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="deneyimlerim">
      <div class="w-100">
        <h2 class="mb-5">Deneyimlerim</h2>
        <?php foreach ($deneyim_listesi as $row) { ?>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0"><?php echo $row->dny_adi; ?></h3>
            <div class="subheading mb-3"><?php echo $row->dny_firma_adi; ?></div>
            <p><?php echo $row->dny_aciklama; ?></p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?php echo $row->dny_calisma_tarihleri; ?></span>
          </div>
        </div>
        <?php } ?>

      </div>

    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="egitim">
      <div class="w-100">
        <h2 class="mb-5">Eğitim</h2>
        <?php foreach ($egitim_listesi as $row) { ?>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0"><?php echo $row->eg_okul_adi; ?></h3>
            <div class="subheading mb-3"><?php echo $row->eg_bolum_adi; ?></div>
            <div><?php echo $row->eg_bolum_icerigi; ?></div>
            <p>Not Ortalaması: <?php echo $row->eg_not_ortalamasi; ?></p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?php echo $row->eg_tarih; ?></span>
          </div>
        </div>
        <?php } ?>

      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="yeteneklerim">
      <div class="w-100">
        <h2 class="mb-5">Yeteneklerim</h2>
        <hr>
        <?php foreach ($yetenek_listesi as $row) { ?>
        <div class="beceri">
        <div class="progress">
        <div class="progress-bar" role="progressbar" style="width:<?php echo $row->yetenek_yuzde; ?>%" aria-valuenow="<?php echo $row->yetenek_yuzde; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $row->yetenek_baslik; ?> <?php echo $row->yetenek_yuzde; ?>%</div>
        </div>
        <br>
        </div><!-- beceri -->
        <br>
        <?php } ?>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="ilgi_alanlarim">
      <div class="w-100">
        <h2 class="mb-5">İlgi Alanlarım</h2>
        <p><?php echo strip_tags($ilgi_alanlarim->ilg_icerik); ?></p>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="sertifikalar_oduller">
      <div class="w-100">
        <h2 class="mb-5">Sertifikalarım &amp; Ödüllerim</h2>
        <ul class="fa-ul mb-0">
        <?php foreach ($sertifikalarim as $row) { ?>
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            <?php echo $row->sertifika_adi; ?>
            </li>
        <?php } ?>
        </ul>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="iletisim">
      <div class="w-100">
        <h2 class="mb-5">İletişim</h2>
        <form action="<?php echo base_url("iletisim/gonder"); ?>" method="post">
        <div class="form-group">
        <label for="gonderen_ad_soyad">Adınız & Soyadınız</label>
        <input type="text" name="gonderen_ad_soyad" class="form-control" id="gonderen_ad_soyad">
        </div>
        <div class="form-group">
        <label for="gonderen_email">E-Mail Adresiniz</label>
        <input type="email" name="gonderen_email" class="form-control" id="gonderen_email">
        <small class="form-text text-muted">Yazmış olduğunuz e-mail üzerinden iletişime geçilecektir.</small>
        </div>
        <div class="form-group">
        <label for="konu">Konu</label>
        <input type="text" name="konu" class="form-control" id="konu">
        </div>
        <div class="form-group">
        <label for="mesaj">Mesajınız</label>
        <textarea class="form-control" name="mesaj" id="mesaj" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Gönder</button>
        </form>
      </div>
    </section>

    <hr class="m-0">

  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url("assets/vendor/jquery/jquery.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url("assets/vendor/jquery-easing/jquery.easing.min.js"); ?>"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url("assets/js/resume.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/js/sweetalert2.all.js"); ?>"></script>
  <?php $this->load->view("admin/alert"); ?>
</body>

</html>
