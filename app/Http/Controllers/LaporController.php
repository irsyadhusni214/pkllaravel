<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kasus2;

class LaporController extends Controller
{
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

        return view('frontend.index', compact('positif','sembuh','meninggal'));
    }
}
