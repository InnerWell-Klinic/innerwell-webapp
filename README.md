# InnerWell Klinic WebApp 🏥

<p align="center">
  <img style="margin-right: 8px;" src="https://img.shields.io/badge/Laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white" />
  <img style="margin-right: 8px;" src="https://img.shields.io/badge/Blade-%23000000.svg?style=for-the-badge&logo=laravel&logoColor=white" />
  <img style="margin-right: 8px;" src="https://img.shields.io/badge/PHP-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white" />
  <img style="margin-right: 8px;" src="https://img.shields.io/badge/Docker-%234688F1.svg?style=for-the-badge&logo=docker&logoColor=white" />
  <img style="margin-right: 8px;" src="https://img.shields.io/badge/MySQL-%234479A1.svg?style=for-the-badge&logo=mysql&logoColor=white" />
</p>

InnerWell Klinic WebApp adalah sebuah sistem manajemen klinik berbasis web yang dibangun dengan Laravel. Aplikasi ini bertujuan untuk mempermudah pengelolaan data pasien, jadwal dokter, antrian, dan berbagai aspek operasional klinik lainnya. Dengan antarmuka yang intuitif dan fitur-fitur yang lengkap, InnerWell membantu meningkatkan efisiensi dan kualitas pelayanan klinik.

## Fitur Utama ✨

*   **👨‍⚕️ Pendaftaran Online :** Pasien dapat melakukan pendaftaran berobat melalui InnerWell WebApp
*   **📅 Manajemen Antrian:** Sistem antrian terintegrasi untuk mengatur alur pasien dengan efisien dan mengurangi waktu tunggu.
*   **📊 Rekam Medis:** Catatan medis terkait dengan data medis pasien
*   **💰 Integrasi Pembayaran Midtrans:** Memudahkan pasien dalam melakukan pembayaran secara online.
*   **🧾 Laporan Keuangan & Operational:** Laporan terkait dengan keuangan dan operational dari InnerWell Klinic

## Tech Stack 🛠️

*   Bahasa: PHP
*   Framework: Laravel
*   Templating Engine: Blade
*   Database: MySQL
*   Containerization: Docker

### Prasyarat

Pastikan telah terinstall:

* **Docker & Docker Compose**: [Panduan Instalasi Docker](https://docs.docker.com/get-docker/)
* **Git**: Untuk melakukan kloning repositori.
* **Terminal/Shell**: Seperti Command Prompt, PowerShell, atau Terminal di Linux/macOS.

### Instalasi dengan Docker

1.  **Kloning Repositori**
    ```sh
    git clone https://github.com/InnerWell-Klinic/innerwell-webapp.git
    cd innerwell-webapp
    ```

2.  **Konfigurasi Environment**
    Salin file `.env.example` menjadi `.env`. File ini berisi konfigurasi utama aplikasi.
    ```sh
    cp .env.example .env
    ```
    Buka file `.env` dan sesuaikan konfigurasi database dan layanan lain jika diperlukan. Konfigurasi default sudah disesuaikan untuk Docker.

3.  **Jalankan Container Docker**
    Bangun dan jalankan semua service (Nginx, PHP, MySQL) menggunakan `docker-compose`.
    ```sh
    docker-compose up -d --build
    ```

4.  **Install Composer**
    ```sh
    composer install
    ```

5.  **Jalankan Migrasi & Seeder Database**
    Buat struktur tabel database dan isi dengan data awal (termasuk akun demo).
    ```sh
    php artisan migrate:fresh
    php artisan migrate
    php artisan db:seed
    ```

8.  **Uncomment line 290 fungsi $this**
    Setelah itu jalankan
    ```sh
    php artisan db:seed --class=JadwalDokterSeeder
    ```

9.  **Jika Terdapat Error**
    Jalankan
    ```sh
    php artisan config:clear
    php artisan config:cache
    php artisan route:clear
    php artisan route:cache
    php artisan view:clear
    ```

10. **Selesai!**
    InnerWell WebApp sekarang seharusnya sudah berjalan. Buka browser dan akses:
    [**http://localhost:8000**](http://localhost:8000)

## Cara Berkontribusi 🤝

1.  Fork repositori ini.
2.  Buat branch untuk fitur Anda (`git checkout -b feature/nama-fitur`).
3.  Commit perubahan Anda (`git commit -m 'Tambahkan fitur baru'`).
4.  Push ke branch Anda (`git push origin feature/nama-fitur`).
5.  Buat Pull Request.
