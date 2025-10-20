# 📰 Laravel News Website  
**Assessment 1 -  Web Framework (Laravel)**  

Proyek ini merupakan tugas **Assessment 1** untuk membangun sebuah website berita sederhana menggunakan **Laravel Framework**. Website ini menampilkan daftar berita, halaman detail berita, serta fitur navigasi sederhana antar halaman.  

---

## 👥 Anggota Kelompok  
| No | Nama Lengkap | NIM | Peran |
|----|----------------|------|--------|
| 1 | Fadillah Dani Prawoto | 2310130004 | Route developer & Designer |
| 2 | Fathi Fathan Fathurrhaman N | 2310130005 | Front End Developer |
| 3 | Muhammad Hafidz Hazhari | 2310130014 | Back End Developer |
| 4 | Angger Hidayat | 2310130002 | View Developer & Designer |

---

## 📘 Deskripsi Proyek  
Website ini menampilkan berita-berita terkini dalam format yang menarik dan mudah dibaca. 
## UI
Struktur utama website terdiri dari:  
- **Home Page**: Menampilkan daftar berita.
- **Halaman Kontak**: Menampilkan Masukan dari User ke Gmail.  
- **Navigasi & Layout Reusable**: Menggunakan file `layout.blade.php` dengan `@yield` dan `@section`.



## UX
Kita menambahkan file di folder App karena folder App berisi logika dari laravel.
- **ContactController**: Berisi data untuk melihat log apakah email yang dimasukan user terdaftar atau tidak, jadi bila terkirim maka akan muncul info success di folder/logs/laravel.log
- **KonyolDrama, News, dan Pemerintah**: Berisikan array yang akan dimunculkan melalui views.
- **ContactAutoReply**: Berisikan data yang menjalankan auto reply ke user yang berisi envelope, konten, dan attachment untuk foto tim.
- **ContactMessage**: Berisikan kodingan untuk memvalidasi email user dan membuatkan pesan untuk dikirim melalui auto reply.
- **.env**: Konfigurasi SMTP dan email untuk menerima masukan dari user.

---


## ⚙️ Fitur Utama  
✅ Menampilkan daftar berita dari file controller.  
✅ Routing Laravel dengan `web.php`.  
✅ Menggunakan Blade Template Engine.  
✅ Reusable header dan footer.  
✅ Bootstrap untuk styling halaman.  
✅ Struktur folder Laravel standar (MVC).  
