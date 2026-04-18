<?php

use App\Models\Peminjaman;
use App\Models\Alat;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    // 🔹 FORM PINJAM (peminjam)
    public function create()
    {
        $alat = Alat::all();
        return view('peminjaman.create', compact('alat'));
    }

    // 🔹 SIMPAN PINJAMAN
    public function store(Request $r)
    {
        $alat = Alat::find($r->alat_id);

        if ($alat->stok < 1) {
            return back()->with('error','Stok habis');
        }

        Peminjaman::create([
            'user_id' => auth()->id(),
            'alat_id' => $r->alat_id,
            'tanggal_pinjam' => now(),
            'status' => 'pending'
        ]);

        return back()->with('success','Menunggu approval');
    }

    // 🔹 LIST PEMINJAMAN (peminjam)
    public function index()
    {
        $data = Peminjaman::where('user_id',auth()->id())->get();
        return view('peminjaman.index', compact('data'));
    }

    // 🔹 LIST UNTUK PETUGAS
    public function approveList()
    {
        $data = Peminjaman::with('user','alat')->get();
        return view('peminjaman.approve', compact('data'));
    }

    // 🔹 APPROVE
    public function approve($id)
    {
        $p = Peminjaman::find($id);
        $alat = Alat::find($p->alat_id);

        if ($alat->stok < 1) {
            return back()->with('error','Stok habis');
        }

        $p->status = 'disetujui';
        $p->save();

        $alat->stok -= 1;
        $alat->save();

        return back()->with('success','Disetujui');
    }

    // 🔹 PENGEMBALIAN
    public function kembali($id)
    {
        $p = Peminjaman::find($id);
        $alat = Alat::find($p->alat_id);

        $p->status = 'dikembalikan';
        $p->tanggal_kembali = now();
        $p->save();

        $alat->stok += 1;
        $alat->save();

        return back()->with('success','Dikembalikan');
    }
}