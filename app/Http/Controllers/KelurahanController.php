<?php

namespace App\Http\Controllers;
use App\Models\Kelurahan;
use App\Models\Kecamatan;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{   
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kelurahan = Kelurahan::all();
        return view('kelurahan.index', compact('kelurahan'));
    }

    public function create()
    {
        $kecamatan = Kecamatan::all();
        return view('kelurahan.create', compact('kecamatan'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kelurahan' => ['required'],
        ]);
        
        $kelurahan = new Kelurahan;
        $kelurahan->kelurahan = $request->kelurahan;
        $kelurahan->id_kecamatan = $request->id_kecamatan;
        $kelurahan->save();
        return redirect()->route('kelurahan.index')->with(['message'=>'Data Berhasil Dibuat']);
    }

    public function show($id)
    {
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::findOrFail($id);
        return view('kelurahan.show', compact('kelurahan', 'kecamatan'));
    }

    public function edit($id)
    {
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::findOrFail($id);
        return view('kelurahan.edit', compact('kelurahan', 'kecamatan'));
    }

    public function update(Request $request, $id)
    {
        $kelurahan = Kelurahan::findOrFail($id);
        $kelurahan->kelurahan = $request->kelurahan;
        $kelurahan->id_kecamatan = $request->id_kecamatan;
        $kelurahan->save();
        return redirect()->route('kelurahan.index')->with(['message'=>'Data Berhasil Di Ubah']);
    }

    public function destroy($id)
    {
        $kelurahan = Kelurahan::findOrFail($id)->delete();
        return redirect()->route('kelurahan.index')->with(['message'=>'Data Berhasil Dihapus']);
    }
}
