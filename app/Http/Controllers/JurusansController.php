<?php

namespace App\Http\Controllers;

use App\Models\Jurusans;
use Illuminate\Http\Request;

class JurusansController extends Controller
{

    public function index()
    {
        $jurusans = Jurusans::all();
        return view('jurusan.index', compact('jurusans'));
    }

    public function create(){
        return view('jurusan.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'id_jurusan' => 'required|string|max:255',
            'nama_jurusan' => 'required|string|max:255',
        ]);

        Jurusans::create($validatedData);
        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $jurusan = Jurusans::findOrFail($id);
        $jurusan->delete();
        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil dihapus!');
    }
}
