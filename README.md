# Pemrograman Web

Kumpulan latihan dan tugas mata kuliah **Pemrograman Web** menggunakan PHP. Proyek ini berisi contoh dasar HTML, PHP, perulangan, fungsi, array, pengolahan form, dan session.

[![PHP](https://img.shields.io/badge/PHP-8%2B-777BB4?logo=php&logoColor=white)](https://www.php.net/)
[![Made for learning](https://img.shields.io/badge/Project-Learning-16a085)](#)

## Daftar Isi

- [Struktur Proyek](#struktur-proyek)
- [Persyaratan](#persyaratan)
- [Menjalankan Proyek](#menjalankan-proyek)
- [Daftar Latihan](#daftar-latihan)
- [Catatan Login Demo](#catatan-login-demo)

## Struktur Proyek

```text
.
├── kuliah/
│   ├── pertemuan2/   # Pengenalan PHP
│   └── pertemuan4/   # Perulangan
├── tugas/
│   ├── tugas1/       # Output dan operasi aritmetika
│   ├── tugas2/       # Perulangan dan pola
│   ├── tugas3/       # Fungsi
│   ├── tugas4/       # Array
│   ├── tugas5/       # Array asosiatif dan gambar
│   └── tugas6/       # Form dan session login
└── README.md
```

## Persyaratan

- PHP 8.0 atau lebih baru
- Browser web

Tidak ada dependensi Composer atau database yang diperlukan.

## Menjalankan Proyek

1. Clone repositori dan masuk ke folder proyek:

   ```bash
   git clone https://github.com/bilker29/pw_243040090.git
   cd pw_243040090
   ```

2. Jalankan server pengembangan PHP dari folder proyek:

   ```bash
   php -S localhost:8000
   ```

3. Buka file latihan yang ingin dicoba melalui browser, contohnya:

   - `http://localhost:8000/kuliah/pertemuan2/latihan1.php`
   - `http://localhost:8000/tugas/tugas5/5a.php`
   - `http://localhost:8000/tugas/tugas6/6b.php`
   - `http://localhost:8000/tugas/tugas6/6c/login.php`

   Untuk latihan form pada `6a.php`, masukkan angka melalui form. Latihan `6a.php` menggunakan metode GET, sedangkan `6b.php` menggunakan metode POST. Nilai yang diterima dibatasi dari 1 sampai 50.

## Daftar Latihan

| Folder | Materi |
| --- | --- |
| `kuliah/pertemuan2` | Output teks dan variabel PHP |
| `kuliah/pertemuan4` | Perulangan `for` dan `while` |
| `tugas/tugas1` | Output, operasi matematika, dan pola kotak |
| `tugas/tugas2` | Perulangan bertingkat dan pola |
| `tugas/tugas3` | Fungsi dan urutan angka |
| `tugas/tugas4` | Pengolahan array |
| `tugas/tugas5` | Data mahasiswa dan gambar |
| `tugas/tugas6` | Form input dan login berbasis session |

## Catatan Login Demo

Halaman login di `tugas/tugas6/6c/` adalah contoh pembelajaran dengan akun demo:

- **Username:** `admin`
- **Password:** `admin`

Kredensial tersebut ditulis langsung di kode untuk keperluan latihan. Jangan gunakan contoh ini untuk aplikasi produksi; aplikasi nyata perlu penyimpanan kredensial yang aman, hashing password, dan perlindungan tambahan.

---

Dibuat untuk dokumentasi latihan Pemrograman Web.
