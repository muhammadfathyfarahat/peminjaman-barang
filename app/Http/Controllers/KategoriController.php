<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.index', compact('kategori'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $r)
    {
        $r->validate([
            'nama' => 'required'
        ]);

        Kategori::create([
            'nama' => $r->nama
        ]);

        return redirect('/kategori')->with('success','Data berhasil ditambah');
    }

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $r, $id)
    {
        $r->validate([
            'nama' => 'required'
        ]);

        $kategori = Kategori::findOrFail($id);

        $kategori->update([
            'nama' => $r->nama
        ]);

        return redirect('/kategori')->with('success','Data berhasil diupdate');
    }

    public function destroy($id)
    {
        Kategori::destroy($id);
        return back()->with('success','Data dihapus');
    }
}