<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\DB;
use App\Models\Provinsi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function index()
    {
        $show = DB::table('provinsis')
            ->join('kotas','kotas.id_provinsi','=','provinsis.id')
            ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
            ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
            ->join('rws','rws.id_kelurahan','=','kelurahans.id')
            ->join('kasus2s','kasus2s.id_rw','=','rws.id')
            ->select('provinsi',
                    DB::raw('sum(kasus2s.positif) as positif'),
                    DB::raw('sum(kasus2s.sembuh) as sembuh'),
                    DB::raw('sum(kasus2s.meninggal) as meninggal'))
            ->groupBy('provinsi')
            ->get();

        $stat = [
            'success' =>true,
            'Data Provinsi' => $show,
            'message' => 'Data Ditampilkan'
        ];
        return response()->json($stat,200);
    }

    public function kota()
    {
        $show = DB::table('kotas')
            ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
            ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
            ->join('rws','rws.id_kelurahan','=','kelurahans.id')
            ->join('kasus2s','kasus2s.id_rw','=','rws.id')
            ->select('kota',
                    DB::raw('sum(kasus2s.positif) as positif'),
                    DB::raw('sum(kasus2s.sembuh) as sembuh'),
                    DB::raw('sum(kasus2s.meninggal) as meninggal'))
            ->groupBy('kota')
            ->get();

        $stat = [
            'success' =>true,
            'Data Kota' => $show,
            'message' => 'Data Ditampilkan'
        ];
        return response()->json($stat,200);
    }

    public function kecamatan()
    {
        $show = DB::table('kecamatans')
            ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
            ->join('rws','rws.id_kelurahan','=','kelurahans.id')
            ->join('kasus2s','kasus2s.id_rw','=','rws.id')
            ->select('kecamatan',
                    DB::raw('sum(kasus2s.positif) as positif'),
                    DB::raw('sum(kasus2s.sembuh) as sembuh'),
                    DB::raw('sum(kasus2s.meninggal) as meninggal'))
            ->groupBy('kecamatan')
            ->get();

        $stat = [
            'success' =>true,
            'Data Kecamatan' => $show,
            'message' => 'Data Ditampilkan'
        ];
        return response()->json($stat,200);
    }
    
    public function kelurahan()
    {
        $show = DB::table('kelurahans')
            ->join('rws','rws.id_kelurahan','=','kelurahans.id')
            ->join('kasus2s','kasus2s.id_rw','=','rws.id')
            ->select('kelurahan',
                    DB::raw('sum(kasus2s.positif) as positif'),
                    DB::raw('sum(kasus2s.sembuh) as sembuh'),
                    DB::raw('sum(kasus2s.meninggal) as meninggal'))
            ->groupBy('kelurahan')
            ->get();

        $stat = [
            'success' =>true,
            'Data Kelurahan' => $show,
            'message' => 'Data Ditampilkan'
        ];
        return response()->json($stat,200);
    }



    public function create()
    {
        //
    }
   
    public function store(Request $request)
    {
        $provinsi = new Provinsi();
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->provinsi = $request->provinsi;
        $provinsi->save();

        $stat = [
            'success' => true,
            'data' => $provinsi,
            'message' => 'Data Berhasil Ditambah'
        ];

        return response()->json($stat,200);
    }

    public function show($id)
    {
        $provinsi = Provinsi::whereId($id)->first();

        if ($provinsi) {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil',
                'data'    => $provinsi
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Provinsi Tidak Ditemukan!',
                'data'    => ''
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provinsi = Provinsi::findOrFail($id);
        $provinsi->delete();

        if ($provinsi) {
            return response()->json([
                'success' => true,
                'message' => 'Provinsi Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Provinsi Gagal Dihapus!',
            ], 500);
        }
    }
}
