# Kanteen 🍽️
<p align="center">
    <img src="public/images/theme/theme-logo.png" alt="Kanteen Logo" width="180">
</p>
Memperkenalkan **Kanteen**– sistem pemesanan meja nirkontak dan pembuat Menu QR. Pelanggan cukup memindai kode QR, melihat menu, melakukan pemesanan, dan menikmati hidangan. Sebuah pengalaman bersantap yang aman dan lancar.

-----

## Teknologi & Persyaratan

Proyek ini dibangun menggunakan teknologi modern untuk memastikan performa dan keamanan yang andal.

  * **Framework**: Laravel 9
  * **PHP**: Versi 8.1 atau lebih tinggi
  * **Dependency Manager**: Composer (wajib ada jika dijalankan di localhost)

-----

## Cara Menjalankan Proyek

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di lingkungan lokal Anda.

1.  **Clone Repositori**
    Gunakan git untuk mengkloning repositori ini ke mesin lokal Anda.

    ```bash
    git clone [URL-repositori-Anda]
    ```

2.  **Masuk ke Direktori Proyek**

    ```bash
    cd Kanteen
    ```

3.  **Install Dependensi**
    Jalankan composer untuk mengunduh semua dependensi PHP yang dibutuhkan.

    ```bash
    composer install
    ```

4.  **Buat File Environment**
    Salin file `.env.example` menjadi file `.env` baru. File ini akan menyimpan semua konfigurasi proyek Anda.

    ```bash
    cp .env.example .env
    ```

5.  **Konfigurasi Database**
    Buka file `.env` dan atur koneksi database Anda (nama database, username, password).

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=kanteen
    DB_USERNAME=root
    DB_PASSWORD=
    ```

6.  **Generate Kunci Aplikasi**
    Buat kunci enkripsi unik untuk aplikasi Anda.

    ```bash
    php artisan key:generate
    ```

7.  **Jalankan Migrasi Database**
    Perintah ini akan membuat semua tabel yang diperlukan di dalam database Anda.

    ```bash
    php artisan migrate
    ```

8.  **(Opsional) Jalankan Seeder**
    Jika proyek memiliki data awal (dummy data), jalankan seeder.

    ```bash
    php artisan db:seed
    ```

9.  **Jalankan Server Lokal**
    Sekarang, proyek Anda siap dijalankan\!

    ```bash
    php artisan serve
    ```

    Aplikasi akan berjalan secara default di `http://127.0.0.1:8000`.

-----

## Alur Pengguna 📱

Kanteen adalah Pembuat Menu dengan Kode QR dan Sistem Pemesanan Meja Nirkontak yang terintegrasi dengan POS Restoran. Ini adalah sistem pemesanan menu digital yang efisien dan mudah, dilengkapi dengan sistem pembayaran nirkontak untuk pengalaman makan di tempat yang modern.

### Pembuat Menu Kode QR

Fitur ini memungkinkan restoran untuk membuat menu digital dalam bentuk **kode QR**. Restoran dapat memasukkan item menu, deskripsi, harga, dan gambar ke dalam sistem. Sistem akan menghasilkan kode QR unik untuk setiap meja atau untuk keseluruhan restoran.

### Sistem Pemesanan Meja Nirkontak

Pelanggan dapat menggunakan ponsel mereka untuk memindai kode QR di meja, yang akan mengarahkan mereka ke menu digital. Dari perangkat mereka, pelanggan dapat menjelajahi item, memilih, dan memesan secara langsung. Pesanan akan langsung terkirim ke dapur atau bar, mengurangi kebutuhan akan menu fisik dan interaksi langsung dengan staf.

### Integrasi POS Restoran

Integrasi dengan sistem **POS (Point of Sale)** restoran memastikan bahwa semua pesanan yang masuk melalui sistem nirkontak diproses dengan lancar. Sistem POS juga dapat menangani proses pembayaran, memungkinkan pelanggan membayar melalui aplikasi atau metode nirkontak lainnya.

-----

## Fitur-fitur ⚙️

### Fitur Frontend

  * **Halaman Utama**
      * Peralihan Bahasa
      * Pencarian Item
      * Pencarian item berdasarkan menu (Kategori)
      * Pencarian item berdasarkan vegetarian/non-vegetarian
      * Langganan newsletter
      * Bagian footer
  * **Halaman Menu**
      * Pencarian item berdasarkan menu (tampilan grid dan daftar)
  * **Halaman Variasi**
      * Menampilkan variasi (tunggal dan multi-variasi)
      * Tambah ke Keranjang
  * **Halaman Keranjang**
      * Menampilkan semua daftar produk dengan variasi dan tambahan (addon)
  * **Halaman Checkout (Pembayaran)**
      * PayPal
      * Stripe
      * RazorPay
      * FlutterWave
      * PayStack
      * Bkash
      * Sslcommerz
      * PayTm
      * MercadoPago
      * SenangPay
      * Cashfree Payments
      * Mollie
      * Telr
      * Phonepe
      * Skrill
      * payfast

### Fitur Backend

  * **Dasbor**
  * **Item**
      * Info Item
      * Variasi Item
      * Ekstra Item
      * Tambahan Item (Addons)
  * **POS**
  * **Pesanan Meja**
  * **Penawaran/Promo**
  * **Pengguna**
      * **Admin**
          * Profil
          * Keamanan (ubah kata sandi)
      * **Pelanggan**
          * Profil
          * Keamanan (ubah kata sandi)
          * Lokasi
          * Pesanan
      * **Karyawan**
          * Profil
          * Keamanan (ubah kata sandi)
  * **Akun**
      * Transaksi
  * **Laporan**
      * Penjualan
      * Item (item terlaris)
      * Saldo Kredit (saldo dompet pengguna)
  * **Pengaturan**
      * Perusahaan
      * Situs
      * Cabang
      * Email
      * OTP
      * Notifikasi
      * Peringatan Notifikasi
      * Analitik
      * Tema
      * Mata Uang
      * Kategori Item
      * Atribut Item
      * Pajak
      * Halaman
      * Peran & Izin
      * Bahasa
      * Gateway SMS
      * Gateway Pembayaran