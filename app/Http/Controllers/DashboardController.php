<?php

namespace App\Http\Controllers;

use App\Models\Jurusans;
use App\Models\Kelas;
use App\Models\Siswas;
use App\Models\Tahuns;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $jurusan = Jurusans::all();
        $kelas = Kelas::all();
        $siswa = Siswas::all();
        $tahuns = Tahuns::all();
        
        return view('dashboard', compact('jurusan', 'kelas', 'siswa', 'tahuns'));
    }
}
