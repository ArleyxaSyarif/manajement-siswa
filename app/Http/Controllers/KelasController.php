<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::with('jurusan')->get();
        return view('kelas.index', compact('kelas'));
    }
    public function create(){
        $jurusans = \App\Models\Jurusans::all();
        return view('kelas.create', compact('jurusans'));
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nama_kelas' => 'required|string|max:255',
            'level_kelas' => 'required|string|max:255',
            'jurusan_id' => 'required|exists:jurusans,id',
        ]);

        Kelas::create($validatedData);
        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil ditambahkan!');
    }
}
