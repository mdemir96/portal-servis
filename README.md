#   Kurulum
  
  Servis modülünü portalınıza eklemek için yapmanız gereken işlemler
  
### 1-) Portal içerisindeki composer.json dosyasında repositories bölümüne modülün linkini eklemek.
        {
            "type": "vcs",
            "url": "https://github.com/mdemir96/portal-servis.git"
        },
### 2-) Portal klasörünün içerisindeki portal/backend/config/main.php , portal/frontend/config/main.php , portal/api/config/main.php dosyalarındaki modules bölümüne kendi modülünüzü eklemeniz gerekmektedir.
        'servis' => [
            'class' => 'kouosl\servis\Module',
        ],
### 3-) Composer.json a eklediğimiz repoyu sistemimize eklemek için vagrant ssh yaptıktan sonra cd /var/www/portal dizininde composer update veya composer require kouosl/portal-servis:dev-master komutunu çalıştırınız.

### 4-) Migration dosyası uplanarak veri tabanına modülde kullandığımız tablolar eklenir. Bunun için vagrant ssh da  "php yii migrate --migrationPath=@vendor/kouosl/portal-servis/migrations --interactive=0" komutu çalıştırılır

 Bu dört adımı uyguladığınızda migrationdaki tablolar veri tabanına eklenecek ve github daki servis modülü portal/vendor/kouosl dizininin altına portal-servis olarak oluşarak  portal.kouosl adresinden erişilebilir hale gelecektir. 
  Erişmek istediğiniz sayfaya  http://portal.kouosl/admin/servis/servis (servis modülünün servis bölümüne backend tarafından ulaşmak için) şeklinde erişebilirsiniz.
