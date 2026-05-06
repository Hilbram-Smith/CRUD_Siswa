<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class crudController extends Controller
{
    public function index () 
    {
        $siswa = DB::table('siswa')->get();

        return view('index',['siswa' => $siswa]);
    }

    public function tambah () {

        return view('tambah');
    }

    public function store (Request $request) {
        DB::table('siswa')->Insert([
            'pelajar_nama' => $request->nama,
            'pelajar_kelas' => $request->kelas,
            'pelajar_umur' => $request->umur,
            'pelajar_alamat' => $request->alamat
        ]);

        return redirect('/pelajar');
    }

    public function edit ($id) {
        $pelajar = DB::table('pelajar')->where('id', $id)->get();
        return view('edit', ['pelajar' => $pelajar]);
    }

    public function update (Request $request) {
        DB::table('pelajar')->where('id', $request->id)->update([
            'pelajar_nama' => $request->nama,
            'pelajar_kelas' => $request->kelas,
            'pelajar_umur' => $request->umur,
            'pelajar_alamat' => $request->alamat
        ]);

        return redirect('/pelajar');
    }

    public function hapus ($id) {
        DB::table('pelajar')->where('id', $id)->delete();
        return redirect('/pelajar');
    }
}
