# Berita UAS
Ini repository digunakan untuk membantu UAS si eldha . . . 

# How to install
1. clone/download file/repository ini
   > Saranku sih di clone aja
2. Setelah selesai jangan lupa jalankan `composer install`
3. Setelah selesai jangan lupa rubah/rename `.env.example2` menjadi hanya `.env`
   > ben mudah tak gawe o sendiri, nama DB nya terserah tapi aku pakek dengan nama `berita-test` tapi asline nggak ngaruh :v
4. Setelah selesai maka selanjutnya adalah menjalankan `php artisan config:cache` untuk membersihkan cache di file laravel
5. Jalankan di terminal `php artisan migrate` untuk membuat tabel sesuai migration
6. Jalankan di terminal `php artisan db:seed` untuk menambahkan dummy data
7. Lalu jalankan `php artisan serve` untuk menjalankan server
8. Selesai . . .

# Versioning
- 0.0.1
  - Membuat file laravel baru
  - Desain template untuk berita dan detail berita
  - Konfigurasi master template & navbar
- 0.0.2
  - Menambahkan Model
  - Menambahkan Controller
  - Menambahkan Seeder