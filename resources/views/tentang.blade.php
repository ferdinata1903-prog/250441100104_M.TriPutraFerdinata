@extends('layouts.app')

@section('judul', 'Tentang')

@section('konten')
    <h1>Tentang Aplikasi</h1>
    <p>
        Mini SIM Mahasiswa adalah aplikasi latihan yang dibuat untuk memahami dasar-dasar Laravel,
        yaitu alur routing, controller, dan view dengan Blade templating. Aplikasi ini tidak memakai
        database sehingga seluruh data ditulis langsung di controller.
    </p>
@endsection
