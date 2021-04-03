<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function getReportProvinsi()
    {
        return view('reports.provinsi');
    }

    public function ReportProvinsi(Request $request)
    {
        $awal = $request->awal;
        $akhir = $request->akhir;
        if ($awal < $akhir) {

            $provinsi = Provinsi::select('provinsis.id', 'provinsis.provinsi', 'provinsis.provinsi', 'kasus2s.tanggal', 'kasus2s.positif', 'kasus2s.sembuh', 'kasus2s.meninggal')
                ->join('kotas', 'provinsis.id', '=', 'kotas.id_provinsi')
                ->join('kecamatans', 'kotas.id', '=', 'kecamatans.id_kota')
                ->join('kelurahans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
                ->join('rws', 'kelurahans.id', '=', 'rws.id_kelurahan')
                ->join('kasus2s', 'rws.id', '=', 'kasus2s.id_rw')
                ->whereBetween('kasus2s.tanggal', [$awal, $akhir])
                ->get();
            return view('reports.provinsi', compact('provinsi'));
        } elseif ($awal > $akhir) {
            return redirect()->back()->with(['error' => 'Tanggal yang dimasukkan tidak valid']);

        }
    }
}