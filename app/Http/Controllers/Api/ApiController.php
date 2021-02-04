<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kasus2;
use App\Models\Provinsi;
use Carbon\Carbon;

class ApiController extends Controller
{
    public function index()
    {
        $today = Carbon::now()->format('d-m-Y'); 
    	$datasekarang = DB::table('kasus2s')
                    ->select(DB::raw('SUM(positif) as Positif'), 
                             DB::raw('SUM(sembuh) as Sembuh'), 
                             DB::raw('SUM(meninggal) as Meninggal'),
                             DB::raw('MAX(tanggal) as Tanggal'))
	    			->whereDay('tanggal', '=' , $today)
	    			->get();
        $dt = DB::table('kasus2s')
                    ->select(DB::raw('SUM(positif) as Positif'), 
                             DB::raw('SUM(sembuh) as Sembuh'), 
                             DB::raw('SUM(meninggal) as Meninggal'))
    				->get();
    	$res = [
    		'success' => true,
    		'data' => [
            'hari_ini' => $datasekarang, 
            'total' => $dt
            ],
    		'message' => 'Berhasil'
    	];
    	return response()->json($res, 200);
        
    }

    public function provinsi($id)
    {
        $show = DB::table('provinsis')
            ->join('kotas','kotas.id_provinsi','=','provinsis.id')
            ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
            ->join('kelurahans','kelurahans.id_kecamatan','=','kecamatans.id')
            ->join('rws','rws.id_kelurahan','=','kelurahans.id')
            ->join('kasus2s','kasus2s.id_rw','=','rws.id')
            ->where('provinsis.id',$id)
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

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
