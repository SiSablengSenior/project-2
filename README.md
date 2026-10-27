# SiSablengSenior Ops — Neo-Brutalism

## Publish ke GitHub Pages
1. Upload seluruh isi ZIP ke repository GitHub.
2. Buka **Settings → Pages**.
3. Pilih **Deploy from a branch**, branch `main`, folder `/docs`, lalu **Save**. Karena `index.html` juga ada di root, Anda juga dapat memilih `/(root)`.
4. Tunggu deployment selesai dan gunakan URL yang ditampilkan GitHub.

## Isi paket
- `index.html` dan `docs/index.html`: UI neo-brutalism, login demo, popup “Selamat Datang Kembali”, Dashboard, Data Controller, Pengaturan, toggle status API ON/OFF, antrean permintaan simulasi.
- `backend/`: starter API PHP/MySQL opsional.
- `reference-original.html`: file HTML asli yang Anda unggah.

## Batasan penting
GitHub Pages hanya hosting file statis HTML/CSS/JS. Ia tidak menjalankan PHP, MySQL, JWT server, atau middleware. Login saat ini hanya demo browser, bukan autentikasi aman; jangan gunakan kredensial sungguhan. Toggle API hanya mengubah indikator UI. Verifikasi nopol dan tindakan controller tidak terhubung ke layanan kendaraan eksternal. Jangan taruh API key rahasia di frontend/repository publik.

Untuk produksi, host backend pada layanan PHP 8.1+ dengan MySQL dan HTTPS, atur secret melalui environment server, lalu sambungkan frontend ke API resmi yang memang Anda berwenang gunakan. Permintaan tindakan berisiko sebaiknya memerlukan review/otorisasi dan audit log.
