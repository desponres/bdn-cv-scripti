<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
<a class="navbar-brand" href="<?php echo base_url("admin"); ?>"><?php echo $title; ?></a>
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#menu_rsp" aria-controls="menu_rsp" aria-expanded="false" aria-label="Menü">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="menu_rsp">
<ul class="navbar-nav navbar-sidenav" id="acilir_menu">
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Anasayfa">
<a class="nav-link" href="<?php echo base_url("admin"); ?>">
<i class="fa fa-fw fa-home"></i>
<span class="nav-link-text">Anasayfa</span>
</a>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Yöneticiler">
<a class="nav-link" href="<?php echo base_url("admin/yoneticiler"); ?>">
<i class="fa fa-fw fa-users"></i>
<span class="nav-link-text">Yöneticiler</span>
</a>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Hakkımda">
<a class="nav-link" href="<?php echo base_url("admin/hakkimda"); ?>">
<i class="fa fa-fw fa-info"></i>
<span class="nav-link-text">Hakkımda</span>
</a>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Deneyimlerim">
<a class="nav-link" href="<?php echo base_url("admin/deneyimlerim"); ?>">
<i class="fa fa-fw fa-star"></i>
<span class="nav-link-text">Deneyimlerim</span>
</a>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Eğitim">
<a class="nav-link" href="<?php echo base_url("admin/egitimlerim"); ?>">
<i class="fa fa-fw fa-graduation-cap"></i>
<span class="nav-link-text">Eğitim</span>
</a>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Yeteneklerim">
<a class="nav-link" href="<?php echo base_url("admin/yeteneklerim"); ?>">
<i class="fa fa-fw fa-certificate"></i>
<span class="nav-link-text">Yeteneklerim</span>
</a>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="İlgi Alanlarım">
<a class="nav-link" href="<?php echo base_url("admin/ilgi-alanlarim"); ?>">
<i class="fa fa-fw fa-tasks"></i>
<span class="nav-link-text">İlgi Alanlarım</span>
</a>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Sertifikalarım ve Ödüllerim">
<a class="nav-link" href="<?php echo base_url("admin/sertifikalarim"); ?>">
<i class="fa fa-fw fa-trophy"></i>
<span class="nav-link-text">Sertifikalarım ve Ödüllerim</span>
</a>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="İletişim Mesajları">
<a class="nav-link" href="<?php echo base_url("admin/iletisim"); ?>">
<i class="fa fa-fw fa-support"></i>
<span class="nav-link-text">İletişim Mesajları</span>
</a>
</li>
<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ayarlar">
<a class="nav-link" href="<?php echo base_url("admin/ayarlar"); ?>">
<i class="fa fa-fw fa-cog"></i>
<span class="nav-link-text">Ayarlar</span>
</a>
</li>
</ul>
<ul class="navbar-nav sidenav-toggler">
<li class="nav-item">
<a class="nav-link text-center" id="sidenavToggler">
<i class="fa fa-fw fa-angle-left"></i>
</a>
</li>
</ul>
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a class="nav-link" data-toggle="modal" data-target="#exampleModal">
<i class="fa fa-fw fa-sign-out"></i>Çıkış yap</a>
</li>
</ul>
</div>
</nav>