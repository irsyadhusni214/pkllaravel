<?php

namespace App\Http\Controllers;
use App\Models\Rw;
use App\Models\Kelurahan;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class RwController extends Controller
{

    
    public function index()
    {
        $rw = Rw::all();
        return view('rw.index', compact('rw'));
    }

    public function create()
    {
        $kelurahan = Kelurahan::all();
        return view('rw.create', compact('kelurahan'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'rw' => ['required'],
            'id_kelurahan' => ['required'],
        ]);
        
        $rw = new Rw;
        $rw->rw = $request->rw;
        $rw->id_kelurahan = $request->id_kelurahan;
        $rw->save();
        return redirect()->route('rw.index')->with(['message'=>'Data Berhasil Dibuat']);
    }

    public function show($id)
    {
        $kelurahan = Kelurahan::all();
        $rw = Rw::findOrFail($id);
        return view('rw.show', compact('rw', 'kelurahan'));
    }

    public function edit($id)
    {
        $kelurahan = Kelurahan::all();
        $rw = Rw::findOrFail($id);
        return view('rw.edit', compact('rw', 'kelurahan'));
    }

    public function update(Request $request, $id)
    {
        $rw = Rw::findOrFail($id);
        $rw->rw = $request->rw;
        $rw->id_kelurahan = $request->id_kelurahan;
        $rw->save();
        return redirect()->route('rw.index')->with(['message'=>'Data Berhasil Di Ubah']);
    }

    public function destroy($id)
    {
        $rw = Rw::findOrFail($id)->delete();
        return redirect()->route('rw.index')->with(['message'=>'Data Berhasil Dihapus']);
    }
}
