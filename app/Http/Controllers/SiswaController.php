<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('guru.siswa.index', compact('siswa'));
    }

    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('guru.siswa.show', compact('siswa'));
    }
}
