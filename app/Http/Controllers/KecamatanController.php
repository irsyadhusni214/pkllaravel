<?php

namespace App\Http\Controllers;
use App\Models\Kecamatan;
use App\Models\Kota;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $kecamatan = Kecamatan::all();
        return view('kecamatan.index', compact('kecamatan'));
    }

    public function create()
    {
        $kota = Kota::all();
        return view('kecamatan.create', compact('kota'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_kecamatan' => ['required'],
            'kecamatan' => ['required'],
        ]);

        $kecamatan = new Kecamatan;
        $kecamatan->kode_kecamatan = $request->kode_kecamatan;
        $kecamatan->kecamatan = $request->kecamatan;
        $kecamatan->id_kota = $request->id_kota;
        $kecamatan->save();
        return redirect()->route('kecamatan.index')->with(['message'=>'Data Berhasil Dibuat']);
    }

    public function show($id)
    {
        $kota = Kota::all();
        $kecamatan = Kecamatan::findOrFail($id);
        return view('kecamatan.show', compact('kecamatan', 'kota'));
    }

    public function edit($id)
    {
        $kota = Kota::all();
        $kecamatan = Kecamatan::findOrFail($id);
        return view('kecamatan.edit', compact('kecamatan', 'kota'));
    }

    public function update(Request $request, $id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
        $kecamatan->kode_kecamatan = $request->kode_kecamatan;
        $kecamatan->kecamatan = $request->kecamatan;
        $kecamatan->id_kota = $request->id_kota;
        $kecamatan->save();
        return redirect()->route('kecamatan.index')->with(['message'=>'Data Berhasil Di Ubah']);
    }

    public function destroy($id)
    {
        $kecamatan = kecamatan::findOrFail($id)->delete();
        return redirect()->route('kecamatan.index')->with(['message'=>'Data Berhasil Dihapus']);
    }
}
