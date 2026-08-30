# HERMèNS — Fashion Landing Page (PHP MVC, Tanpa Database)

Aplikasi Web Landing Page Pakaian menggunakan Native PHP (MVC Paradigm) **tanpa database** — produk dikelola lewat array statis dan order dilakukan via WhatsApp. Siap deploy ke [Vercel](https://vercel.com).

## Struktur Project

```
ruang-fashion/
├── api/
│   └── index.php              # Entry point untuk Vercel
├── app/
│   ├── Controllers/
│   │   └── ProductController.php
│   ├── Models/
│   │   └── ProductModel.php   # Data produk (array statis)
│   ├── Views/
│   │   └── landing.php        # Tampilan landing page
│   └── router.php             # Router bersama (dipakai semua entry point)
├── config/
│   └── app.php                # BASE_URL & nomor WhatsApp admin
├── public/                    # Asset statis + entry point lokal
│   ├── images/
│   │   ├── hero/              # Gambar carousel utama
│   │   └── products/          # Gambar produk katalog
│   └── index.php              # Entry point untuk XAMPP/Apache
├── .htaccess                  # Pretty URL untuk Apache (lokal)
├── vercel.json                # Konfigurasi deploy Vercel
└── README.md
```

## Cara Menggunakan

1. **Kelola Produk:**
   - Buka `app/Models/ProductModel.php`, tambah/ubah/hapus produk pada array.
2. **Gambar Produk:**
   - Letakkan gambar di `public/images/products/` lalu isi key `image` dengan path-nya, contoh: `/images/products/nama-file.jpg`.
3. **Konfigurasi WhatsApp Admin:**
   - Buka `config/app.php` dan sesuaikan `WA_NUMBER` (format internasional tanpa tanda `+`, contoh: `6281234567890`).

## Menjalankan Secara Lokal

**XAMPP / Apache:** letakkan folder project di `htdocs`, lalu akses:
- Pretty URL: `http://localhost/ruang-fashion/home`
- Atau langsung: `http://localhost/ruang-fashion/public/index.php?url=home`

**PHP built-in server (tanpa XAMPP):**
```bash
php -S localhost:8000 api/index.php
```

## Deploy ke Vercel

Tidak perlu database apa pun — langsung jalan.

### Opsi A: Via Dashboard (Git)
1. Push project ini ke repository GitHub/GitLab.
2. Buka [vercel.com/new](https://vercel.com/new) → import repository tersebut.
3. Klik **Deploy** (runtime PHP sudah terdeteksi otomatis dari `vercel.json`).

### Opsi B: Via CLI
```bash
npm i -g vercel
vercel login
vercel --prod
```

Setelah selesai, landing page Anda live di URL yang diberikan Vercel (bisa juga custom domain).
