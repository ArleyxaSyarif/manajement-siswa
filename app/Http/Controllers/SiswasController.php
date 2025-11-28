<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswasController extends Controller
{
    public function index()
    {
        $siswas = \App\Models\Siswas::with(['kelas', 'tahun'])->get();
        return view('siswa.index', compact('siswas'));
    }
    public function create(){
        $kelas = \App\Models\Kelas::all();
        $tahun = \App\Models\Tahuns::all();
        return view('siswa.create', compact('kelas', 'tahun'));
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'nisn_siswa' => 'required|string|max:255|unique:siswas,nisn_siswa',
            'alamat_siswa' => 'required|string|max:500',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'foto_siswa' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'agama' => 'required|in:Islam,Kristen,Katolik,Hindu,Buddha,Konghucu',
            'tanggal_lahir' => 'required|date',
            'kelas_id' => 'required|exists:kelas,id',
            'tahun_id' => 'required|exists:tahuns,id',
        ]);

        if ($request->hasFile('foto_siswa')){
            $file = $request->file('foto_siswa');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/fotosiswa'), $filename);
            $validatedData['foto_siswa'] = 'uploads/fotosiswa/' . $filename;
        }
        \App\Models\Siswas::create($validatedData);
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan!');
    }
}
