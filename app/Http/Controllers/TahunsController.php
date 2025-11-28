<?php

namespace App\Http\Controllers;

use App\Models\Tahuns;
use Illuminate\Http\Request;

class TahunsController extends Controller
{
    public function index()
    {
        $tahuns = Tahuns::all();
        return view('tahun.index', compact('tahuns'));
    }
    public function create()
    {
        return view('tahun.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'id_tahun' => 'required|string|max:255',
            'tahun' => 'required|string|max:255',
        ]);

        Tahuns::create($validatedData);
        return redirect()->route('tahun.index')->with('success', 'Tahun berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $tahun = Tahuns::findOrFail($id);
        $tahun->delete();
        return redirect()->route('tahun.index')->with('success', 'Tahun berhasil dihapus!');
    }

    
}
