Software Requirement:
1. PHP versi 7.3 keatas
2. MySQL server 
Jika menggunakan Windows, untuk PHP dan MySQL bisa memakai XAMPP (Download)
3. Composer disarankan versi terbaru (https://getcomposer.org/download/)
4. NodeJS dan NMP (optional, diperlukan untuk compile asset jika dibutuhkan) https://nodejs.org/en/download/
5. Git (https://git-scm.com/downloads)

Tahap Instalasi:
Pastikan semua software sudah terinstall di PC.
1. Masuk folder yang akan digunakan untuk project
2. Klik kanan, pilih Git BASH here
3. Setelah jendela Git BASH terbuka, ketik perintah berikut:
    git clone https://github.com/za2n456/Laravel-QRReader (enter)
4. Setelah project terdownload, masuk ke project directory dengan perintah berikut:
    cd Laravel-QRReader (enter)
5. Install dependency dengan composer:
    composer install (enter)
6. Dilanjutkan dengan perintah berikut:
    composer dump-autoload (enter)
7. Apabila muncul error, silahkan buka project directory melalui file manager
    - masuk folder storage
    - buat folder baru dengan nama framework
    - masuk ke folder framework
    - buat 3 folder baru dengan nama cache, views, dan sessions
    - jalankan lagi perintah composer dump-autoload
8. Buat database baru dengan phpmyadmin, buka di browser localhost/phpmyadmin (login default XAMPP: root tanpa password)
9. Kembali ke directory project, ubah file .env.example menjadi .env kemudian buka dengan code editor
10. Ganti detail konfigurasi database dengan database yang baru dibuat
      DB_DATABASE=
      DB_USERNAME=
      DB_PASSWORD=
      Cukup ubah 3 baris konfigurasi diatas, yang lain biarkan default.
11. Buka kembali Git BASH, jalankan perintah berikut:
       php artisan key:generate
   php artisan migrate
   php artisan db:seed
12. Sampai disini tahap instalasi telah selesai kemudian jalankan perintah
      php artisan serve
13. Project bisa dibuka via browser dg alamat localhost:8000

