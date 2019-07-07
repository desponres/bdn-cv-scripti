# Açık kaynak Resume/CV scripti
Merhaba arkadaşlar, daha önce blog, itiraf ve film scripti paylaşmıştım. Neden Resume/CV scripti paylaşmayayım :) Sizlere codeigniter ile yazmış olduğum Resume/CV scriptini ücretsiz olarak veriyorum :)

# Yönetim paneli özellikleri
-Yöneticiler Sayfası (Ekle - Düzenle - Sil)
-Hakkımda Sayfası (Düzenle)
-Deneyimlerim Sayfası (Ekle - Düzenle - Sil)
-Eğitim Sayfası (Ekle - Düzenle - Sil)
-Yeteneklerim Sayfası (Düzenle - Sil)
-İlgi Alanlarım Sayfası (Düzenle - Sil)
-Sertifikalarım ve Ödüllerim Sayfası (Düzenle - Sil)
-İletişim Mesajları Sayfası (Görüntüle - Sil)
-Genel Ayarlar (Düzenle)

# Açıklama
Resume/CV sitesi açmak isteyenlere tamamen açık kaynak kodlu uygun bir scripttir. Anasayfa kısmında StartBootstrap tarafından ücretsiz yayınlanan "Blog Home" ve "Blog Post" kullanılmıştır. Admin paneli kısmında StartBootstrap tarafından ücretsiz yayınlanan "SB Admin" kullanılmıştır. Kullanımı son derece basit ve kolaydır. Anasayfada gösterilecek olan yazıların sayısını "Genel Ayarlar" kısmından "Anasayfada görünecek olan yazı sayısı" bölümünü doldurmaları yeterlidir.

# Yönetim paneli bilgileri (demo panel bilgileri için bu adresten iletişime geçebilirsiniz: http://desponres.ml)
website.com/admin
Kullanıcı adı: admin@admin.com
Şifre: admin.com
(Bu bilgileri daha sonra yönetim panelinden değiştirebilirsiniz.)

# Kurulum
->application->config->config.php = bu dizindeki dosyanın içerisinde;

$config['base_url'] = 'dizin buraya';

bu alana scriptin kurulu olduğu dizini yazın.


->application->config->database.php = bu dizindeki dosyanın içerisinde;

  'hostname' => 'buraya veritabanı sunucunuzun adı',
	'username' => 'buraya veritabanı kullanıcı adınız',
	'password' => 'buraya veritabanı şifreniz',
	'database' => 'buraya veritabanı adınız',
  
  bu alanları kendinize göre doldurunuz. Daha sonra "sql" klasörünün içerisinde bulunan "bdn-cv-scripti.sql" dosyasını phpmyadmin veya herhangi bir sql admin kullanarak oluşturmuş olduğunuz veritabanına import ediniz.
  
  # Eğer kurulumda bir sorun çıkarsa veya yardımcı olabileceğim bir konu olursa bana sosyal medya adreslerimden ve http://desponres.ml adresinden ulaşabilirsiniz.
  
# NOTLAR
 Not 1: Eğer kurulumda bir sorun çıkarsa veya yardımcı olabileceğim bir konu olursa bana sosyal medya adreslerimden ulaşabilirsiniz.(Script üzerinde düzenleme - ekleme vs. yapmamaktayım.)
 Not 2: Bu script tamamen açık kaynak ve ücretsizdir. Kendinize göre düzenleyebilirsiniz.
 Not 4: Script kurulumundan sonra admin paneli veya diğer sayfalarda 404 hatası alıyorsanız gizli dosyaları görünür yapıp .htaccess dosyalarını tekrar ftp programı ile sunucuya atmayı unutmayınız
