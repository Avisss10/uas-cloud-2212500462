# PHP Contact App

Aplikasi sederhana untuk menyimpan dan menampilkan daftar kontak menggunakan PHP dan MySQL, dijalankan menggunakan Docker Compose.

## Struktur Project

```
.
├── app/
│   ├── dbconn.php
│   ├── Dockerfile
│   └── index.php
├── db/
│   └── 2212500462.sql
├── docker-compose.yml
└── .gitignore
```

## Fitur

- Menambah kontak baru melalui form.
- Menampilkan daftar kontak yang sudah tersimpan.

## Instalasi & Menjalankan

### 1. Clone Repository

```sh
git clone <repo-url>
cd uas-cloud-2212500462
```

### 2. Jalankan dengan Docker Compose

Pastikan Docker dan Docker Compose sudah terinstall.

```sh
docker-compose up --build
```

- Service `db` akan otomatis membuat database dan tabel dari [`db/2212500462.sql`](db/2212500462.sql).
- Service `app` akan berjalan di port 8080.

### 3. Akses Aplikasi

Buka browser dan akses:  
[http://localhost:8080](http://localhost:8080)

## File Penting

- [`app/index.php`](app/index.php): Halaman utama aplikasi.
- [`app/dbconn.php`](app/dbconn.php): Koneksi ke database.
- [`db/2212500462.sql`](db/2212500462.sql): Skrip SQL untuk membuat database dan tabel.
- [`docker-compose.yml`](docker-compose.yml): Konfigurasi Docker Compose.

## Catatan

- Konfigurasi database:
  - Host: `db`
  - User: `root`
  - Password: `root`
  - Database: `2212500462`
- Data MySQL akan tersimpan di volume Docker `mysql-data`.