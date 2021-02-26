<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use carbon\carbon;
use App\Models\Kasus2;
use App\Models\Provinsi;

class LaporController extends Controller
{   

    //indonesia
    public function index(){
       $positif = DB::table('rws')->select('kasus2s.positif','kasus2s.sembuh','kasus2s.meninggal')
                ->join('kasus2s','rws.id','=','kasus2s.id_rw')
                ->sum('kasus2s.positif');
       $sembuh = DB::table('rws')->select('kasus2s.positif','kasus2s.sembuh','kasus2s.meninggal')
                ->join('kasus2s','rws.id','=','kasus2s.id_rw')
                ->sum('kasus2s.sembuh');
       $meninggal = DB::table('rws')->select('kasus2s.positif','kasus2s.sembuh','kasus2s.meninggal')
                ->join('kasus2s','rws.id','=','kasus2s.id_rw')
                ->sum('kasus2s.meninggal');
        
        $res = Http::get('https://api.kawalcorona.com/');
        $global = $res->json();

        $tanggal = Carbon::now()->format('D d-m-y');

        //provinsi
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

        return view('frontend.index', compact('positif','sembuh','meninggal','show','tanggal','global'));
    }
}
