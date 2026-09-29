Pertama, saya membuat tujuh rute di routes/web.php, yaitu beranda, tentang, kontak, mahasiswa.profil, mahasiswa.index, mahasiswa.show, dan dashboard. Semuanya saya beri nama persis seperti tabel di soal, karena nama itu dipakai oleh route() di navbar dan di view yang sudah disediakan.

Kedua, saya membuat view tentang.blade.php dan kontak.blade.php. Keduanya adalah child view dari layout, jadi saya memakai @extends('layouts.app'), lalu @section('judul') untuk mengisi judul tab, dan @section('konten') untuk isi halaman.

Ketiga, saya membuat MahasiswaController dengan perintah php artisan make:controller. Di dalamnya, data lima mahasiswa saya simpan di satu method private bernama dataMahasiswa(). Alasannya supaya data tidak ditulis dua kali, karena dipakai oleh index() dan show(), dan dibuat private karena method ini tidak boleh diakses sebagai rute.
Method profil() mengirim variabel nama, nim, prodi, dan angkatan ke view mahasiswa.profil.
Method index() mengirim seluruh array ke view mahasiswa.index dengan nama variabel mahasiswa. Hasilnya di browser, halaman /mahasiswa menampilkan tabel dengan lima baris, lengkap dengan nomor urut otomatis, badge status berwarna, dan tautan Detail.
Method show($nim) menerima NIM dari URL, lalu mencari satu mahasiswa dengan collect(...)->firstWhere('nim', $nim). Kalau data ditemukan, datanya dikirim ke view mahasiswa.show sebagai $mhs.

Keempat, saya membuat DashboardController dengan satu method index(). Method ini mengirim tiga variabel ke view dashboard, yaitu totalMahasiswa bernilai 5, totalAktif bernilai 3, dan totalCuti bernilai 1.