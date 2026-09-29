<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function profil()
    {
        return view('mahasiswa.profil', [
            'nama' => 'Sinta Maharani',
            'nim' => '2410010001',
            'prodi' => 'Sistem Informasi',
            'angkatan' => 2024,
        ]);
    }

    public function index()
    {
        return view('mahasiswa.index', [
            'mahasiswa' => $this->dataMahasiswa(),
        ]);
    }

    public function show($nim)
    {
        $mhs = collect($this->dataMahasiswa())->firstWhere('nim', $nim);

        if ($mhs === null) {
            abort(404);
        }

        return view('mahasiswa.show', ['mhs' => $mhs]);
    }

    private function dataMahasiswa(): array
    {
        return [
            ['nim' => '2410010001', 'nama' => 'Sinta Maharani', 'prodi' => 'Sistem Informasi', 'angkatan' => 2024, 'status' => 'aktif'],
            ['nim' => '2410010002', 'nama' => 'Budi Santoso', 'prodi' => 'Sistem Informasi', 'angkatan' => 2024, 'status' => 'aktif'],
            ['nim' => '2410010003', 'nama' => 'Rina Wulandari', 'prodi' => 'Sistem Informasi', 'angkatan' => 2023, 'status' => 'cuti'],
            ['nim' => '2410010004', 'nama' => 'Ahmad Fauzi', 'prodi' => 'Sistem Informasi', 'angkatan' => 2023, 'status' => 'aktif'],
            ['nim' => '2410010005', 'nama' => 'Dewi Lestari', 'prodi' => 'Sistem Informasi', 'angkatan' => 2022, 'status' => 'lulus'],
        ];
    }
}
