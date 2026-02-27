<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    // Baris 9: Pastikan tidak ada typo dan kurung lengkap
    public function index()
        {
            $siswa = \App\Models\Siswa::all(); // Pakai path lengkap biar aman
            return view('siswa.index', compact('siswa')); 
        }

    public function create() 
    {
        return view('siswa.create');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'umur' => 'required|integer',
            'nilai' => 'required|numeric'
        ]);

        Siswa::create($request->all());
        return redirect()->route('siswa.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id) 
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id) 
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'umur' => 'required|integer',
            'nilai' => 'required|numeric'
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());
        return redirect()->route('siswa.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id) 
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Data berhasil dihapus');
    }
}