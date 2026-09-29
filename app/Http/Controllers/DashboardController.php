<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'totalMahasiswa' => 5,
            'totalAktif' => 3,
            'totalCuti' => 1,
        ]);
    }
}
