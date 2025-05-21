<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presensi;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;

class PresensiController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('guru.presensi.index', compact('siswa'));
    }

    public function store(Request $request)
    {
        foreach ($request->keterangan as $siswa_id => $keterangan) {
            Presensi::create([
                'guru_id' => Auth::id(),
                'siswa_id' => $siswa_id,
                'keterangan' => $keterangan,
            ]);
        }

        return redirect()->back()->with('success', 'Presensi berhasil disimpan.');
    }
}
