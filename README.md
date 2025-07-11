# PHP Contact App

Aplikasi sederhana untuk menyimpan dan menampilkan daftar kontak menggunakan PHP dan MySQL.

## Struktur Project

```
.
├── app/
│   ├── dbconn.php
│   ├── Dockerfile
│   └── index.php
├── db/
│   └── 2212500462.sql
└── .gitignore
```

## Fitur

- Menambah kontak baru melalui form.
- Menampilkan daftar kontak yang sudah tersimpan.

## Instalasi

### 1. Clone Repository

```sh
git clone <repo-url>
cd uas-cloud-2212500462/app
```

### 2. Setup Database

- Import file SQL yang ada di [`db/2212500462.sql`](db/2212500462.sql) ke MySQL:

```sh
mysql -u root -p < ../db/2212500462.sql
```

### 3. Jalankan dengan Docker

Pastikan Docker sudah terinstall.

```sh
docker build -t php-contact-app .
docker run -p 8080:80 --name contact-app --link mysql-db-container:db php-contact-app
```

> **Catatan:**  
> Pastikan Anda sudah memiliki container MySQL yang berjalan dengan:
> - user: `root`
> - password: `root`
> - database: `2212500462`
> - service name: `db` (agar sesuai dengan konfigurasi di [`app/dbconn.php`](app/dbconn.php))

### 4. Akses Aplikasi

Buka browser dan akses:  
[http://localhost:8080](http://localhost:8080)

## File Penting

- [`app/index.php`](app/index.php): Halaman utama aplikasi.
- [`app/dbconn.php`](app/dbconn.php): Koneksi ke database.
- [`db/2212500462.sql`](db/2212500462.sql): Skrip SQL untuk membuat database dan tabel.
