<?php

namespace App\Http\Controllers;
use App\Models\Kasus2;
use App\Models\Rw;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class kasus2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $kasus2 = Kasus2::all();
        return view('kasus2.index', compact('kasus2'));
    }

    public function create()
    {
        $rw = Rw::all();
        return view('kasus2.create', compact('rw'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'positif' => ['required'],
            'sembuh' => ['required'],
            'meninggal' => ['required'],
            'tanggal' => ['required'],
        ]);

        $kasus2 = new Kasus2;
        $kasus2->positif = $request->positif;
        $kasus2->sembuh = $request->sembuh;
        $kasus2->meninggal = $request->meninggal;
        $kasus2->tanggal = $request->tanggal;
        $kasus2->id_rw = $request->id_rw;
        $kasus2->save();
        return redirect()->route('kasus2.index')->with(['message'=>'Data Berhasil Dibuat']);
    }

    public function show($id)
    {
        $rw = Rw::all();
        $kasus2 = Kasus2::findOrFail($id);
        return view('kasus2.show', compact('kasus2', 'rw'));
    }

    public function edit($id)
    {
        $rw = Rw::all();
        $kasus2 = Kasus2::findOrFail($id);
        return view('kasus2.edit', compact('kasus2', 'rw'));
    }

    public function update(Request $request, $id)
    {
        $kasus2 = Kasus2::findOrFail($id);
        $kasus2->positif = $request->positif;
        $kasus2->sembuh = $request->sembuh;
        $kasus2->meninggal = $request->meninggal;
        $kasus2->tanggal = $request->tanggal;
        $kasus2->id_rw = $request->id_rw;
        $kasus2->save();
        return redirect()->route('kasus2.index')->with(['message'=>'Data Berhasil Di Ubah']);
    }

    public function destroy($id)
    {
        $kasus2 = Kasus2::findOrFail($id)->delete();
        return redirect()->route('kasus2.index')->with(['message'=>'Data Berhasil Dihapus']);
    }
}