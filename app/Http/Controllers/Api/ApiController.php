<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kasus2;

class ApiController extends Controller
{
    public function index()
    {
        $positif = DB::table('rws')
                ->select('kasus2s.positif','kasus2s.sembuh','kasus2s.meninggal')
                ->join('kasus2s','rws.id','=','kasus2s.id_rw')
                ->sum('kasus2s.positif');
        $sembuh = DB::table('rws')
                ->select('kasus2s.positif','kasus2s.sembuh','kasus2s.meninggal')
                ->join('kasus2s','rws.id','=','kasus2s.id_rw')
                ->sum('kasus2s.sembuh');
        $meninggal = DB::table('rws')
                ->select('kasus2s.positif','kasus2s.sembuh','kasus2s.meninggal')
                ->join('kasus2s','rws.id','=','kasus2s.id_rw')
                ->sum('kasus2s.meninggal');

        $stat = [
            'success' => true,
            'data' =>'Data Kasus Indonesia',
            'Jumlah Positif' => $positif,
            'Jumlah Sembuh' => $sembuh,
            'Jumlah Meninggal' => $meninggal,
            'message' => 'Data Kasus Ditampilkan'
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
