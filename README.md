# HERMèNS — Fashion Landing Page (Static Site, Tanpa Database)

Landing Page Pakaian **tanpa database** — produk dikelola lewat array statis (PHP) lalu
**di-render menjadi HTML statis** dan di-hosting di **Firebase Hosting**.
Deploy dilakukan otomatis lewat GitHub Actions setiap Anda push ke branch `main`
via GitHub Desktop.

## Cara Kerja

Project tetap ditulis dalam PHP MVC (mudah dikelola), tapi untuk hosting di
Firebase (yang hanya melayani file statis) hasilnya di-"bake" jadi satu
`public/index.html` yang sudah berisi semua produk.

```
snh2/
├── build/static.php             # Generator: render PHP MVC -> public/index.html
├── public/
│   ├── index.html               # Hasil render (INILAH yang di-host Firebase)
│   └── images/                  # Gambar hero + katalog
├── app/ ...                     # Sumber PHP (dipakai untuk regenerate)
├── config/app.php               # Nomor WA, alamat, sosmed
├── firebase.json                # Konfigurasi Firebase Hosting
└── .github/workflows/           # Auto-deploy saat push ke main
```

## Cara Mengubah Isi Website

1. **Ubah produk** → edit `app/Models/ProductModel.php`.
2. **Ubah no WA / alamat / sosmed** → edit `config/app.php`.
3. **Regenerate** halaman statis:
   ```
   C:\xampp\php\php.exe build\static.php
   ```
   (Menggunakan PHP bawaan XAMPP; hasilnya menimpa `public/index.html`.)
4. **Commit & push** lewat GitHub Desktop → website otomatis ter-update.

> Catatan: `public/index.html` adalah satu-satunya file yang benar-benar disajikan.
> Setiap perubahan produk WAJIB diregenerate dulu, baru di-push.

## Deploy ke Firebase (Sekali Saja)

1. **Buat Firebase project:**
   - Buka https://console.firebase.google.com dengan akun Google Anda.
   - Klik **Add project** → beri nama (mis. `snh2`) → **Create** (Blaze plan
     bisa dipilih tanpa dikenai biaya selama pemakaian di bawah kuota gratis).

2. **Sambungkan GitHub ke Firebase** (paling mudah, lewat console):
   - Di console, buka **Hosting** → **Get started** → **Connect your GitHub repository**.
   - Pilih repo `herman1908ab/snh2`, klik **Install/Authorize** saat diminta.
   - Firebase akan otomatis: menambahkan secret `FIREBASE_SERVICE_ACCOUNT_<PROJECT_ID>`
     ke repo, dan (jika perlu) menyesuaikan file workflow di `.github/workflows/`
     dengan project ID yang benar. Biarkan saja — ini justru mewakili langkah 3 di bawah.

3. **Cek project ID** sudah benar di `.github/workflows/firebase-hosting-merge.yml`
   dan `.firebaserc` (pada kolom `projectId` / `default`) — ganti
   `REPLACE_WITH_YOUR_FIREBASE_PROJECT_ID` bila console belum menimpanya.
   Project ID bisa dilihat di *Project settings* → *General* pada Firebase console.

4. **Push** semua perubahan lewat GitHub Desktop (commit + push ke `main`).
   Action "Deploy to Firebase Hosting on merge" akan berjalan dan website Anda
   live di `https://<project-id>.web.app`.

## Alternatif: Deploy Manual via CLI

```bash
npm i -g firebase-tools
firebase login
firebase use --add   # pilih project
firebase deploy --only hosting
```

## Menjalankan Secara Lokal

Buka `public/index.html` langsung di browser (double-click), atau lewat XAMPP:
- `http://localhost/snh2/public/`