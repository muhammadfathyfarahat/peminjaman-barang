<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\Kategori;
use Illuminate\Http\Request;

class AlatController extends Controller
{
    public function index()
    {
        $alat = Alat::with('kategori')->get();
        return view('alat.index', compact('alat'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('alat.create', compact('kategori'));
    }

    public function store(Request $r)
    {
        $r->validate([
            'nama' => 'required',
            'kategori_id' => 'required',
            'stok' => 'required|integer',
            'kondisi' => 'required'
        ]);

        Alat::create($r->all());

        return redirect('/alat')->with('success','Data berhasil ditambah');
    }

    public function edit($id)
    {
        $alat = Alat::findOrFail($id);
        $kategori = Kategori::all();
        return view('alat.edit', compact('alat','kategori'));
    }

    public function update(Request $r, $id)
    {
        $alat = Alat::findOrFail($id);
        $alat->update($r->all());

        return redirect('/alat')->with('success','Data berhasil diupdate');
    }

    public function destroy($id)
    {
        Alat::destroy($id);
        return back()->with('success','Data dihapus');
    }
}